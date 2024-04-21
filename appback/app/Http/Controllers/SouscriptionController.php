<?php

namespace App\Http\Controllers;

use App\Models\Souscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SouscriptionController extends Controller
{
    public function AllSouscription()
    {
        $souscriptions = Souscription::latest()->simplePaginate(5);
        return view('admin.souscription.index', compact('souscriptions'));
    }

    public function getSouscription()
    {
        $souscriptions = Souscription::all();
        return response()->json($souscriptions); 
    }

    public function StoreSouscription(Request $request)
    {
        $validatedData = $request->validate([
            'souscription_name' => 'required|unique:souscriptions|min:4',
            'souscription_description' => 'required|min:50', // Supprimer 'unique'
            'souscription_image' => 'required|mimes:jpg,jpeg,png', // Corriger les espaces
        ], [
            'souscription_name.required' => 'Veuillez entrer le nom du produit',
            'souscription_description.required' => 'Veuillez entrer la description du produit',
            'souscription_name.min' => 'Minimum 4 caractères',
            'souscription_description.min' => 'Minimum 50 caractères', // Ajouter une règle de validation pour la description
        ]);

        $souscription = new Souscription();
        $souscription->souscription_name = $request->souscription_name;
        $souscription->souscription_description = $request->souscription_description;

        if ($request->hasFile('souscription_image')) {
            $image = $request->file('souscription_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/souscription_images', $imageName);
            $souscription->souscription_image = $path;
        }
        $souscription->save();
        return redirect()->back()->with('success', 'Le produit a été ajouté');
    }

    public function Edit($id)
    {
        $souscription = Souscription::find($id); // Modifier la variable pour correspondre au nom de la table
        return view('admin.souscription.edit', compact('souscription')); // Modifier la variable à transmettre à la vue
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'souscription_name' => 'required|min:4',
            'souscription_description' => 'required|min:50', // Modifier la longueur minimale de la description
        ], [
            'souscription_name.required' => 'Veuillez entrer le nom du produit',
            'souscription_description.required' => 'Veuillez entrer la description produit',
            'souscription_name.min' => 'Minimum 4 caractères',
            'souscription_description.min' => 'Minimum 50 caractères', // Modifier le message pour la description
        ]);

        $souscription = Souscription::find($id);
        if ($request->hasFile('souscription_image')) {
            Storage::delete($souscription->souscription_image);
            $image = $request->file('souscription_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/souscription_images', $imageName);
            $souscription->souscription_image = $path;
        }

        $souscription->souscription_name = $request->souscription_name;
        $souscription->souscription_description = $request->souscription_description;
        $souscription->save();
        return redirect()->back()->with('success', 'Le produit a été modifié');
    }

    public function Delete($id)
    {
        $delete = Souscription::find($id)->delete();
        return redirect()->back()->with('success', 'Le produit a été supprimé'); // Modifier le message de succès
    }
}
