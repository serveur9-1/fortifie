<?php


namespace App\Repository;


use App\Article;
use App\Category;
use App\Diocese;
use App\Mail\ArticleEnableOrDisableMail;
use App\Mail\NewsletterMail;
use App\Paroisse;
use App\User;
use App\Denonciation;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ArticleRepository
{
    private $art;
    private $cat;
    private $paro;

    private $user;

    private $perPage = 10;

    private $query;

    private $annonce;

    public function __construct(Article $a, Category $c, Paroisse $pa, User $u, Denonciation $den)
    {
        $this->art = $a;
        $this->cat = $c;
        $this->paro = $pa;

        $this->user = $u;

        $this->den = $den;
    }

    public function getArticle()
    {
        return $this->art->newQuery()
            ->select()
            ->where('is_active',true)
            ->orderBy('created_at','DESC')->paginate($this->perPage);

    }


    public function createArticle($array)
    {
        $sans_titre = false;

        if($array->sans_titre){

            $sans_titre = true;

        }else{

            $sans_titre = false;

        }

        
        $new_a = $this->art->newQuery()
            ->create([
                'titre' => $array->titre,
                'description' => $array->description,
                'category_id' => $array->category,
                'paroisse_id' => $array->paroisse,
                'user_id' => auth()->user()->id,
                'contact_telephone' => $array->contact_telephone,
                'contact_email' => $array->contact_email,
                'sans_titre' => $sans_titre,
                'contact_fixe' => $array->contact_fixe,
                'img' => $array->img,
                'debut' => $array->debut,
                'heure_debut' => $array->heure_debut,
                'fin' => $array->fin,
                'heure_fin' => $array->heure_fin
            ]);

    }


    public function updateArticle($id, $array)
    {
        $sans_titre = false;

        if($array->sans_titre){
            $sans_titre = true;
        }else{
            $sans_titre = false;
        }

        $this->art->newQuery()->findOrFail($id)
            ->update([
                'titre' => $array->titre,
                'description' => $array->description,
                'category_id' => $array->category,
                'paroisse_id' => $array->paroisse,
                'user_id' => auth()->user()->id,
                'sans_titre' => $sans_titre,
                'contact_telephone' => $array->contact_telephone,
                'contact_email' => $array->contact_email,
                'contact_fixe' => $array->contact_fixe,
                'img' => $array->img,
                'debut' => $array->debut,
                'fin' => $array->fin
            ]);
    }

    public function getArticleAdmin($is_active=true)
    {
        if($is_active){

            return $this->art->newQuery()
            ->select()
            ->orderBy('created_at','DESC')->get();

        }else{

            return $this->art->newQuery()
            ->select()
            ->where('is_active',$is_active)
            ->orderBy('created_at','DESC')->get();

        }

    }

    public function enableOrDisableArticle($id, $enable, $data, $is_new = false)
    {

        $a = $this->art->newQuery()->select()->where('id',$id);
        $ars = $a->get();


        if(!$is_new)
        {
            if($enable){

                $a->update([
                    'is_active' => false
                ]);
    
                $data->subject = "Votre annonce est desactivée";
                $data->is_enable = false;
    
            }else{
    
                $a->update([
                    'is_active' => true
                ]);
    
                $data->subject = "Votre annonce est activée";
                $data->is_enable = true;
    
            }

        }else{

            if($enable){

                $a->update([
                    'is_active' => false,
                    'is_new' => false
                ]);

                $data->subject = "Votre annonce est bloquée";
                $data->is_enable = false;

                    
            }else{
    
                $a->update([
                    'is_active' => true,
                    'is_new' => false
                ]);
                $data->subject = "Votre annonce est publié maintenant";
                $data->is_enable = true;

                //  ENVOYER MESSAGE A TOUS LES ABONNES DE CETTE CATEGORIE 
                
                $new_cat = new Category();
                $cat = $new_cat->newQuery()->select()->where('id', $ars[0]->category->id)->get();
                $data["category"] = $cat->toArray();

                $data["id"] = $ars[0]->category->id;
                
                $data["suscriber"] = array_column($cat[0]->newsletter->toArray(), 'email');
                
                $data["access_link"] = url()->route('description',['id' => $id ]);
                
                
                
                // encrypt and decrypt
                //http://127.0.0.1:8000/unsuscribe?c=1&e=alexis.yoboue%40uvci.edu.ci 

                if(count($cat[0]->newsletter->toArray()) > 0){

                    for($i=0; $i < count($cat[0]->newsletter->toArray()) ; $i++)
                    {
                        for($i=0; $i < count($data["suscriber"]) ; $i++){
                                $data["suscribers"] = $data["suscriber"][$i];
                                //print_r($data);
                                Mail::send(new NewsletterMail($data));
                        }
                    } 
                    
                }
    
    
            }

        }

        //Envoyer MAil au gestionnaire

        foreach ($ars[0]->paroisse->gestionnaire as $k){
    
            $data->receiver = $k->user->email;
            $data->user = $k->user->name;


        }

        //dd($ars[0]->paroisse->gestionnaire[0]);
        $data->titre = $ars[0]->titre;
        $data->img = $ars[0]->img;
        $data->url = route('description', ['id' => $id]);

        if($ars[0]->paroisse->gestionnaire[0] != null){

            Mail::send(new ArticleEnableOrDisableMail($data));

        }


    }

    public function getArticleWithId($id)
    {
        return $this->art->newQuery()
            ->findOrFail($id);
    }

    public function getArticleByCategory($id)
    {
        $this->cat->newQuery()->findOrFail($id);

        return $this->art->newQuery()
            ->select()
            ->where('is_active',true)
            ->where('category_id',$id)
            ->paginate($this->perPage);
    }


    public function getMyArticle($user_id, $paroisse_id, $is_active = true)
    {
        $usr = $this->user->newQuery()
                ->findOrFail($user_id);

        if(!$usr->is_admin)
        {
            // not admin

            if(isset($is_active) && $is_active == 0)
            {

                $this->annonce = $this->art->newQuery()
                    ->select()
                    ->where('user_id',$user_id)
                    ->where('paroisse_id', $paroisse_id)
                    ->where('is_active', false)
                    ->orderBy('id','DESC')
                    ->get();

            }else{

                $this->annonce = $this->art->newQuery()
                    ->select()
                    ->where('user_id',$user_id)
                    ->where('paroisse_id', $paroisse_id)
                    ->where('is_active', true)
                    ->orderBy('id','DESC')
                    ->get();
            }

            return $this->annonce;

        }else{
            return [];
        }

    }


    //count article


    public function countArticle($user_id, $paroisse_id, $is_active = true)
    {
        if($is_active)
        {
            return $this->art->newQuery()
                ->select()
                ->where('user_id',$user_id)
                ->where('paroisse_id', $paroisse_id)
                ->where('is_active', true);
        }else{

            return $this->art->newQuery()
                ->select()
                ->where('user_id',$user_id)
                ->where('paroisse_id', $paroisse_id)
                ->where('is_active', false);

        }
    }


/*
 * PAS ENCORE UTILISER
 *
 * */
    public function getSomeArticleOf($id, $paroisse_id, $category_id)
    {
        return $this->art->newQuery()
            ->findOrFail($id)
            ->where('paroisse_id', $paroisse_id)
            ->where('is_active',true)
            ->orWhere('category_id', $category_id)
            ->orderBy('id','DESC')
            ->limit(6)
            ->get();
    }


    //Obtenir des articles en fonc de la paroisse

    public function getArticleByParoisse($paroisse_id)
    {
        $this->paro->newQuery()
            ->findOrFail($paroisse_id);

        return $this->art->newQuery()
            ->select()
            ->where('paroisse_id', $paroisse_id)
            ->where('is_active',true)
            ->orderBy('id','DESC')
            ->paginate($this->perPage);
    }


    //DELETE ARTICLE

    public function deleteArticle($article_id)
    {
        return $this->art->newQuery()
                ->findOrFail($article_id)
                ->delete();

    }




    public function search($q, $category_id, $diocese_id, $date)
    {

        if( isset($q) && isset($category_id) && isset($diocese_id) && isset($date))
        {
            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif ( isset($q) && isset($diocese_id) && isset($date)){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif ( isset($category_id) && isset($q) && isset($date)){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->paginate($this->perPage);

        }elseif ( isset($category_id) && isset($diocese_id) && isset($date)){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('category_id',$category_id)
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif ( isset($q) && isset($category_id) && isset($diocese_id )){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif ( isset($diocese_id) && isset($date) ){

            $this->query = $this->art->newQuery()
            ->select()
                ->where('is_active',true)
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif ( isset($category_id) && isset($date) ){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($date) ){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($category_id) )
        {
            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($diocese_id))
        {
            $diocese_id = Diocese::findOrFail($diocese_id)->paroisse;

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif (isset($category_id) && isset($diocese_id))
        {
            $diocese_id = Diocese::findOrFail($diocese_id)->paroisse;

            $this->query = $this->art->newQuery()
                ->select()
                ->where('category_id',$category_id)
                ->whereIn('paroisse_id', $diocese_id)
                ->paginate($this->perPage);


        }elseif (isset($category_id))
        {
            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($diocese_id)){
            $diocese_id = Diocese::findOrFail($diocese_id)->paroisse;

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->whereIn('paroisse_id',$diocese_id)
                ->paginate($this->perPage);

        }elseif (isset($date)){

            $this->query = $this->art->newQuery()
                ->select()
                ->where('debut','<=',$date)
                ->where('fin','>=',$date)
                ->paginate($this->perPage);

        }else{

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->paginate($this->perPage);
        }
        return $this->query;
    }

    //verifie le bon id de l'article

    public function verifyId($id)
    {
        return $this->art->newQuery()
            ->findOrFail($id);
    }


    //Denonciation


    public function getDenonciation()
    {

        return $this->den->newQuery()->select()->orderBy('created_at','DESC')->get();
    }

    public function denonciateArticle($id, $array)
    {
        $this->art->newQuery()->findOrFail($id);

        $this->den->create([
            'motif' => $array->content,
            'article_id' => $id
        ]);
    }

    



}
