<?php


namespace App\Repository;


use App\Article;
use App\Category;

class ArticleRepository
{
    private $art;

    public function __construct(Article $a)
    {
        $this->art = $a;
    }

    public function getArticle()
    {
        return $this->art->newQuery()
            ->select()
            ->orderBy('created_at','DESC')->paginate(10);

    }

    public function getArticleWithId($id)
    {
        return $this->art->newQuery()
            ->findOrFail($id);
    }

    public function getSomeArticleOf($id, $diocese_id, $category_id)
    {
        //SELECT * FROM `articles` WHERE diocese_id = 3 AND category_id = 8 ORDER BY id DESC LIMIT 5
        //SELECT * FROM `articles` WHERE diocese_id = 3 OR category_id = 8 ORDER BY id DESC LIMIT 5
        //SELECT * FROM `articles` WHERE diocese_id = 3 ORDER BY id DESC LIMIT 5
        return $this->art->newQuery()
            ->findOrFail($id)
            ->where('diocese_id', $diocese_id)
            ->orWhere('category_id', $category_id)
            ->orderBy('id','DESC')
            ->limit(6)
            ->get();
    }
}
