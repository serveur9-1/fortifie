<?php


namespace App\Repository;


use App\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CategoryRepository
{
    private $c;

    public function __construct(Category $c)
    {
        $this->c = $c;
    }

    /*
     *
     * ###################################################"
     * #################################################
     * */

    public function getMostPopulateCategory()
    {
        return $this->c->newQuery()
            ->select()
            ->limit(3)
            ->orderBy('libelle','ASC')
            ->get();

    }


    public function getCategory()
    {
        return $this->c->newQuery()
            ->select()
            ->orderBy('libelle','ASC')
            ->get();

    }

/*    public function getCategory()
    {
        return $this->c->newQuery()
            ->select()
            ->orderBy('libelle','ASC')
            ->paginate(15);

    }*/


    public function createCategory($array)
    {
        $slug = Str::slug($array['libelle'].".".time());
        $cat = $this->c->newQuery()->create([
            'libelle' => $array['libelle'],
            'slug' => $slug
        ]);
    }


    public function deleteCategory($id)
    {
        $cat = $this->c->newQuery()->findOrFail($id);

        $cat->delete();
    }

    public function updateCategory($id, $array)
    {
        $cat = $this->c->newQuery()->findOrFail($id);
        $cat->update([
            'libelle' => $array['libelle']
        ]);

    }
}
