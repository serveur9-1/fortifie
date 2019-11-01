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
            ->orderBy('created_at','DESC')->paginate($this->perPage);

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
            ->where('category_id',$id)
            ->get();
    }


    public function getMyArticle($user_id, $diocese_id, $is_active = true)
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
                    ->where('diocese_id', $diocese_id)
                    ->where('is_active', false)
                    ->orWhereDate('fin', '<', Carbon::now())
                    ->orderBy('id','DESC')
                    ->paginate($this->perPage);

            }else{

                $this->annonce = $this->art->newQuery()
                    ->select()
                    ->where('user_id',$user_id)
                    ->where('diocese_id', $diocese_id)
                    ->where('is_active', true)
                    ->whereDate('fin', '>=', Carbon::now())
                    ->orderBy('id','DESC')
                    ->paginate($this->perPage);
            }

            return $this->annonce;

        }else{
            return [];
        }

    }


    //count article


    public function countArticle($user_id, $diocese_id, $is_active = true)
    {
        if($is_active)
        {
            return $this->art->newQuery()
                ->select()
                ->where('user_id',$user_id)
                ->where('diocese_id', $diocese_id)
                ->where('is_active', true)
                ->orWhereDate('fin', '>', Carbon::now());
        }else{

            return $this->art->newQuery()
                ->select()
                ->where('user_id',$user_id)
                ->where('diocese_id', $diocese_id)
                ->where('is_active', false)
                ->orWhereDate('fin', '<', Carbon::now());

        }
    }


/*
 * PAS ENCORE UTILISER
 *
 * */
    public function getSomeArticleOf($id, $diocese_id, $category_id)
    {
        return $this->art->newQuery()
            ->findOrFail($id)
            ->where('diocese_id', $diocese_id)
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
            ->orderBy('id','DESC')
            ->get();
    }


    //DELETE ARTICLE

    public function deleteArticle($user_id, $diocese_id, $article_id)
    {
        $usr = $this->user->newQuery()
                ->findOrFail($user_id)
                ->get();
    }





    //Recherche

    public function search($q, $category_id, $diocese_id)
    {

        if( isset($q) && isset($category_id) && isset($diocese_id))
        {
            $this->verifyId($category_id);
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->where('diocese_id', $diocese_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($category_id) )
        {
            $this->verifyId($category_id);
            $this->query = $this->art->newQuery()
                ->select()
                ->where('titre','LIKE',"%$q%")
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($q) && isset($diocese_id))
        {
            $this->verifyId($q);
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
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
                ->where('category_id',$category_id)
                ->paginate($this->perPage);

        }elseif (isset($diocese_id))
        {
            $this->verifyId($diocese_id);

            $this->query = $this->art->newQuery()
                ->select()
                ->where('diocese_id',$diocese_id)
                ->paginate($this->perPage);

        }else{

            $this->query = $this->art->newQuery()
                ->select()
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



}
