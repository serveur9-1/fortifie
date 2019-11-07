<?php


namespace App\Repository;


use App\Article;
use App\Category;
use App\Paroisse;
use App\User;
use Carbon\Carbon;

class ArticleRepository
{
    private $art;
    private $cat;
    private $paro;

    private $user;

    private $perPage = 10;

    private $query;

    private $annonce;

    public function __construct(Article $a, Category $c, Paroisse $pa, User $u)
    {
        $this->art = $a;
        $this->cat = $c;
        $this->paro = $pa;

        $this->user = $u;
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

        $this->art->newQuery()
            ->create([
                'titre' => $array->titre,
                'description' => $array->description,
                'category_id' => $array->category,
                'paroisse_id' => $array->paroisse,
                'user_id' => 1,
                'contact_telephone' => $array->contact_telephone,
                'contact_email' => $array->contact_email,
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

        $this->art->newQuery()->findOrFail($id)
            ->update([
                'titre' => $array->titre,
                'description' => $array->description,
                'category_id' => $array->category_id,
                'paroisse_id' => $array->paroisse_id,
                'user_id' => $array->user_id,
                'contact_telephone' => $array->contact_telephone,
                'contact_email' => $array->contact_email,
                'contact_fixe' => $array->contact_fixe,
                'img' => $array->img,
                'debut' => $array->debut,
                'fin' => $array->fin
            ]);
    }

    public function getArticleAdmin()
    {
        return $this->art->newQuery()
            ->select()
            ->orderBy('created_at','DESC')->get();
    }

    public function enableOrDisableArticle($id, $enable)
    {
        $a = $this->art->newQuery()->findOrFail($id);

        if(true){

            $a->update([
                'is_active' => false
            ]);


        }else{

            $a->update([
                'is_active' => true
            ]);
        }

        $a->update([
            'is_active' => $enable
        ]);

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
            ->get();
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
                    ->where('is_active',true)
                    ->where('is_active', false)
                    ->orderBy('id','DESC')
                    ->paginate($this->perPage);

            }else{

                $this->annonce = $this->art->newQuery()
                    ->select()
                    ->where('user_id',$user_id)
                    ->where('paroisse_id', $paroisse_id)
                    ->where('is_active',true)
                    ->where('is_active', true)
                    ->orderBy('id','DESC')
                    ->paginate($this->perPage);
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

        return $this->paro->newQuery()
            ->select()
            ->where('id', $paroisse_id)
            ->where('is_active',true)
            ->orderBy('id','DESC')
            ->get();
    }


    //DELETE ARTICLE

    public function deleteArticle($article_id)
    {
        return $this->art->newQuery()
                ->findOrFail($article_id)
                ->delete();

    }





    //Recherche

    public function searchOnDashboard($q, $user_id)
    {
        return $this->art->newQuery()
            ->select()
            ->where('is_active',true)
            ->where('titre','LIKE',"%$q%")
            ->where('user_id',$user_id)
            ->paginate($this->perPage);
    }

    public function search($q, $category_id, $diocese_id)
    {
/*
        if( isset($q) && isset($category_id) && isset($diocese_id))
        {
            $this->verifyId($category_id);
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->where('diocese_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($category_id) )
        {
            $this->verifyId($category_id);
            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($diocese_id))
        {
            $this->verifyId($q);
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->where('diocese_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif (isset($category_id) && isset($diocese_id))
        {
            $this->verifyId($category_id);
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('category_id',$category_id)
                ->where('diocese_id', $diocese_id)
                ->paginate($this->perPage);


        }elseif (isset($category_id))
        {
            $this->verifyId($category_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($diocese_id))
        {
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('diocese_id',$diocese_id)
                ->paginate($this->perPage);

        }else{

            $this->query = $this->art->newQuery()
                ->select()
                ->where('is_active',true)
                ->where('titre','LIKE',"%$q%")
                ->paginate($this->perPage);
        }
        return $this->query;*/
    }

    //verifie le bon id de l'article

    public function verifyId($id)
    {
        return $this->art->newQuery()
            ->findOrFail($id);
    }



}
