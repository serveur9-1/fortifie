<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaqSection;
use App\FaqQuestion;
use App\FaqAnswer;

class FaqController extends Controller
{
    public function __construct()
    {
        
    }

    public function faq()
    {
        return view('site.faqs.faq',[
            'faq' => FaqSection::all()
        ]);
    }

    public function index()
    {
        return view('admin.faq.faq',[
            'sections' => FaqSection::all(),
            'edit' => false,
        ]);
    }

    public function createSection(Request $request)
    {
        $n = new FaqSection();
        $this->validate(request(), [
            'libelle' => 'required|min:5|max:50',
        ]);
        if($request->edit)
        {
            $msg = "modifié";
            $sec = $n::findOrFail($request->id);

            $sec->libelle = $request->libelle;
            $sec->save();
        }else{

            $msg = "ajouté";
            $n::create([
                'libelle' => $request->libelle
            ]);
        }

        return redirect()->back()->withSuccess("Vous avez bien $msg une section !");

    }


    public function editSection($id)
    {
        return view('admin.faq.faq',[
            'sections' => FaqSection::all(),
            'edit' => true,
            'section' => FaqSection::findOrFail($id)
        ]);
    }


    public function deleteSection(Request $request, $id)
    {
        $n = new FaqSection();

        $n::findOrFail($id)->delete();

        return redirect()->back()->withSuccess('Vous avez bien supprimé une section !');

    }




    //QUESTION PART

    public function question()
    {
        return view('admin.faq.question',[
            'sections' => FaqSection::all(),
            'edit' => false,
        ]);
    }


    public function createQuestion(Request $request)
    {
        $n = new FaqQuestion();
        $this->validate(request(), [
            'libelle' => 'required|min:5|max:100'
        ]);
        if($request->edit)
        {
            $msg = "modifié";
            $sec = $n::findOrFail($request->id);

            $sec->libelle = $request->libelle;
            $sec->faq_section_id = $request->section;
            $sec->save();
        }else{

            $msg = "ajouté";
            $n::create([
                'libelle' => $request->libelle,
                'faq_section_id' => $request->section
            ]);
        }

        return redirect()->back()->withSuccess("Vous avez bien $msg une question !");

    }


    public function editQuestion($id)
    {
        return view('admin.faq.question',[
            'sections' => FaqSection::all(),
            'edit' => true,
            'question' => FaqQuestion::findOrFail($id)
        ]);
    }


    public function deleteQuestion(Request $request, $id)
    {
        $n = new FaqQuestion();

        $n::findOrFail($id)->delete();

        return redirect()->back()->withSuccess('Vous avez bien supprimé une question !');

    }



    //ANSWER PART

    public function answer()
    {
        return view('admin.faq.answer',[
            'questions' => FaqQuestion::all(),
            'edit' => false,
        ]);
    }


    public function createAnswer(Request $request)
    {
        $n = new FaqAnswer();
        $this->validate(request(), [
            'libelle' => 'required|min:5'
        ]);

        if($request->edit)
        {
            $msg = "modifié";
            $sec = $n::findOrFail($request->id);

            $sec->libelle = $request->libelle;
            $sec->save();
        }else{

            $msg = "ajouté";
            $sec = $n::create([
                'libelle' => $request->libelle,
            ]);
        }

        $sec->question()->sync($request->question);

        return redirect()->back()->withSuccess("Vous avez bien $msg une reponse !");

    }


    public function editAnswer($id)
    {
        return view('admin.faq.answer',[
            'questions' => FaqQuestion::all(),
            'edit' => true,
            'answer' => FaqAnswer::findOrFail($id)
        ]);
    }


    public function deleteAnswer(Request $request, $id)
    {
        $n = new FaqAnswer();

        $n::findOrFail($id)->delete();

        return redirect()->back()->withSuccess('Vous avez bien supprimé une question !');

    }
}
