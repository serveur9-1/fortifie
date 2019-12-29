<?php


namespace App\Repository;


use App\SubCategory;

class SubCategoryRepository
{
    private $subC;

    public function __construct(SubCategory $subC)
    {
        $this->subC = $subC;
    }


    public function getSubCategory()
    {
        return $this->subC->newQuery()->distinct("category_id")->orderBy('libelle','ASC')->get();
    }


    public function deleteSubCategory($id)
    {
        $scat = $this->subC->newQuery()->findOrFail($id);

        $scat->delete();
    }



    public function createSubCategory($array)
    {
        $this->subC->newQuery()->create([
            'libelle' => $array['libelle'],
            'category_id' => $array['category']
        ]);
    }

    public function updateSubCategory($id, $array)
    {
        $scat = $this->subC->newQuery()->findOrFail($id);

        $scat->update([
            'libelle' => $array['libelle'],
            'category_id' => $array['category']
        ]);
    }





}
