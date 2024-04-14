<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    //

    public function AllCat()
    {
        $categories = Category::latest()->simplePaginate(5);
        $trachCat = Category::onlyTrashed()->latest()->simplePaginate(3);

        // $categories= DB::table('categories')->latest()->simplePaginate(5);
        return view('admin.category.index', compact('categories', 'trachCat'));
    }

    public function AddCat(Request $request)
    {
        $validateData = $request->validate(
            [
                'category_name' => 'required|unique:categories|max:255',

            ],
            [
                'category_name.required' => 'Veuillez entrer le nom de la categorie',

            ]
        );

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // $data['created_at'] = Carbon::now();
        // DB::table('categories')->insert($data);




        return Redirect()->back()->with('success', 'La categorie a été ajoutée');
    }

    public function Edit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }
    public function update(Request $request, $id)
    {
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);
        return Redirect()->route('all.category')->with('success', 'La categorie a été modifiée');
    }

    public function Delete($id)
    {
        $delete= Category::find($id)->delete();
        return Redirect()->back()->with('success', 'La categorie a été supprimée');
    }
}
