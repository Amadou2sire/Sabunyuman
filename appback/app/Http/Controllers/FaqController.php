<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function AllFaq()
    {
        $faqs = Faq::latest()->simplePaginate(5);
        return view('admin.faq.index', compact('faqs'));
    }
    public function getFaq()
    {
        $faqs = Faq::latest()->take(4)->get();
        return response()->json($faqs);
    }

    public function ShowFaq($id)
    {
        $faqs = Faq::findOrFail($id);
        return response()->json($faqs);
    }
    public function StoreFaq(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|unique:faqs',
            'reponse' => 'required',
            'souscription' => 'required',
        ]);
        
        $faq=new Faq();
        $faq->question=$request->question;
        $faq->reponse=$request->reponse;
        $faq->souscription=$request->souscription;
        $faq->save();
        return redirect()->back()->with('success', 'Le Faq a été ajouté');

    }
    public function Edit($id)
    {
        $faq = Faq::find($id); // Modifier la variable pour correspondre au nom de la table
        return view('admin.faq.edit', compact('faq')); // Modifier la variable à transmettre à la vue
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'question' => 'required|unique:faqs',
            'reponse' => 'required',
            
        ]);
        $faq= Faq::find($id);
        $faq->question=$request->question;
        $faq->reponse=$request->reponse;
        $faq->souscription=$request->souscription;
        $faq->save();
        return redirect()->back()->with('success', 'Le Faq a été modifiée');
    }

    public function Delete($id)
    {
        $delete = Faq::find($id)->delete();
        return redirect()->back()->with('success', 'Le faq a été supprimé'); // Modifier le message de succès
    }
}
