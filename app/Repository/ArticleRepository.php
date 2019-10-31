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
}
