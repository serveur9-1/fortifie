<?php


namespace App\Repository;


use App\Category;

class CategoryRepository
{
    private $c;

    public function __construct(Category $c)
    {
        $this->c = $c;
    }

    public function getCategory()
    {
        return $this->c->newQuery()
            ->select()
            ->limit(3)
            ->orderBy('libelle','ASC')
            ->get();

    }
}
