<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function AllBanner()
    {
        $banners = Banner::latest()->simplePaginate(5);

        return view('admin.banner.index', compact('banners'));
    }
    public function getBanner()
    {
        $banners = Banner::all();
        return ($banners);
    }

    public function StoreBanner(Request $request)
    {
        $validateData = $request->validate(
            [
                'image' => 'required|mimes:jpg, jpeg,png',
            ],           
        );

        $banner = new Banner();
       

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/banner_images', $imageName);
            $banner->image = $path;
        }
        $banner->save();

        return Redirect()->back()->with('success', 'La bannière a été ajoutée');
    }

    public function Edit($id)
    {
        $banners = Banner::find($id);
        return view('admin.banner.edit', compact('banners'));
    }

    public function Update(Request $request, $id)
    {
       
        $banners = Banner::find($id);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            Storage::delete($banners->image); // Supprimer l'ancienne image du stockage

            // Enregistrer la nouvelle image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move('public/banner_images', $imageName);
            $banners->image = $path;
        }
        $banners->save();

        return redirect()->back()->with('success', 'La bannière a été modifiée');
    }

    public function Delete($id)
    {
        $delete = Banner::find($id)->delete();
        return Redirect()->back()->with('success', 'La marque a été supprimée');
    }
}
