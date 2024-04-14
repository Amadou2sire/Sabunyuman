<?php

namespace App\Http\Controllers;

use App\Models\MultiPic;
use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function AllBrand()
    {
        $brands = Brand::latest()->simplePaginate(5);

        return view('admin.brand.index', compact('brands'));
    }
    public function getBrand()
    {
        $brands = Brand::all();
        return ($brands);
    }

    public function StoreBrand(Request $request)
    {
        $validateData = $request->validate(
            [
                'brand_name' => 'required|unique:brands|min:4',
                'brand_image' => 'required|mimes:jpg, jpeg,png',

            ],
            [
                'brand_name.required' => 'Veuillez entrer le nom de la marque',
                'brand_name.min' => 'Minimum 4 caractères',


            ]
        );

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;

        if ($request->hasFile('brand_image')) {
            $image = $request->file('brand_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/brand_images', $imageName);
            $brand->brand_image = $path;
        }
        $brand->save();

        return Redirect()->back()->with('success', 'La marque a été ajoutée');
    }

    public function Edit($id)
    {
        $brands = Brand::find($id);
        return view('admin.brand.edit', compact('brands'));
    }

    public function Update(Request $request, $id)
    {
        $validateData = $request->validate([
            'brand_name' => 'required|min:4',
        ], [
            'brand_name.required' => 'Veuillez entrer le nom de la marque',
            'brand_name.min' => 'Minimum 4 caractères',
        ]);

        $brand = Brand::find($id);

        if ($request->hasFile('brand_image')) {
            // Supprimer l'ancienne image
            Storage::delete($brand->brand_image); // Supprimer l'ancienne image du stockage

            // Enregistrer la nouvelle image
            $image = $request->file('brand_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/brand_images', $imageName);
            $brand->brand_image = $path;
        }

        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect()->back()->with('success', 'La marque a été modifiée');
    }


    public function Delete($id)
    {
        $delete = Brand::find($id)->delete();
        return Redirect()->back()->with('success', 'La marque a été supprimée');
    }



    //Multi Image

    public function Multipic()
    {
        $images = MultiPic::all();
        return view('admin.multipic.index', compact('images'));
    }

    public function StoreImage(Request $request)
    {
        // Vérification de la présence des fichiers images dans la requête
        if ($request->hasFile('image')) {
            // Récupération des fichiers images
            $images = $request->file('image');

            // Itération sur chaque fichier image
            foreach ($images as $image) {
                // Vérification du fichier image
                if ($image->isValid()) {
                    // Génération du nom de fichier unique
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    // Déplacement du fichier vers le dossier de stockage
                    $path = $image->move('public/multi', $imageName);

                    // Création d'une nouvelle instance de MultiPic
                    $multiPic = new MultiPic();
                    // Enregistrement du chemin de l'image dans l'instance de MultiPic
                    $multiPic->image = $path;
                    // Sauvegarde de l'instance de MultiPic dans la base de données
                    $multiPic->save();
                }
            }

            // Redirection avec un message de succès
            return redirect()->back()->with('success', 'Les images ont été ajoutées avec succès');
        }

        // Redirection en cas de fichier image manquant dans la requête
        return redirect()->back()->with('error', 'Aucune image n\'a été téléchargée');
    }

public function Logout(){
    Auth::logout();
    return redirect()->route('login')-> with('success','utilisateur déconnecté');
}

}
