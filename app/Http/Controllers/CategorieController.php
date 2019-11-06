<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\SousCategoryRequest;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\SubCategoryRepository;
use App\SubCategory;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private $a;

    public function __construct(ArticleRepository $a, CategoryRepository $c, SubCategoryRepository $sc)
    {
        $this->a = $a;
        $this->c = $c;
        $this->sc = $sc;
    }

    public function categorie($id)
    {
        return view('site.article.index',[
            'article' => $this->a->getArticleByCategory($id),
        ]);
    }

    //administration

    public function listCategorie()
    {
        return view('admin.categorie.listCategorie',[
            'category' => $this->c->getCategory()
        ]);
    }

    public function addCategorie()
    {
        return view('admin.categorie.addCategorie',[
            'edit' => false,
        ]);
    }

    public function validCategorie(CategoryRequest $request)
    {
        $this->c->createCategory($request);

        return redirect()->back()->with('success',' Vous avez bien ajouté une nouvelle catégorie.');
    }

    public function editCategorie($id)
    {
        return view('admin.categorie.addCategorie',[
            'edit' => true,
            'category' => Category::findOrfail($id)
        ]);
    }

    public function updateCategorie($id, CategoryRequest $request)
    {
        $this->c->updateCategory($id, $request);
        return redirect()->back()->with('success',' Vous avez bien modifié une catégorie.');
    }

    public function deleteCategorie($id)
    {
        $this->c->deleteCategory($id);

        return redirect()->back()->with('success',' Vous avez bien supprimé une catégorie.');
    }

    //SOUS CATEGORY

    public function listSousCategorie()
    {
        return view('admin.sousCategories.listSousCategorie',[
            'subCategory' => $this->sc->getSubCategory()
        ]);
    }

    public function addSousCategorie()
    {
        return view('admin.sousCategories.addSousCategorie', [
            'edit' => false,
            'category' => $this->c->getCategory()
        ]);
    }

    public function validSousCategorie(SousCategoryRequest $request)
    {
        $this->sc->createSubCategory($request);
        return redirect()->back()->with('success',' Vous avez bien ajouté une nouvelle sous catégorie.');
    }


    public function editSousCategorie($id)
    {
        return view('admin.sousCategories.addSousCategorie', [
            'edit' => true,
            'category' => $this->c->getCategory(),
            'subCategory' => SubCategory::findOrFail($id)
        ]);
    }


    public function updateSousCategorie(SousCategoryRequest $request, $id)
    {
        $this->sc->updateSubCategory($id, $request);
        return redirect()->back()->with('success',' Vous avez bien modifié une sous catégorie.');
    }





    public function deleteSousCategorie($id)
    {
        $this->sc->deleteSubCategory($id);
        return redirect()->back()->with('success',' Vous avez bien supprimé une sous catégorie.');
    }

}
