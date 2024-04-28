<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    //
    public function getVideo()
    {
        $videos = Video::latest()->take(4)->get();
        return response()->json($videos);
    }

    public function getlatestVideo()
    {
        $videos = Video::latest()->take(1)->get();
        return response()->json($videos);
    }

    public function AllVideo()
    {
        $videos = Video::latest()->simplePaginate(5);
       
        return view('admin.video.index', compact('videos'));
    }
    public function StoreVideo(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required|unique:videos|max:255',
                'description' => 'required',
                'iframe' => 'required',

            ],
            [
                'name.required' => 'Veuillez entrer le nom',
                'description.required' => 'Veuillez entrer la description',
                'iframe.required' => 'Veuillez entrer iframe',

            ]
        );

        Video::insert([
            'name' => $request->name,
            'description' => $request->description,
            'iframe' => $request->iframe,
            'created_at' => Carbon::now()
        ]);

    
        return Redirect()->back()->with('success', 'La vidéo a été ajoutée');
    }

    public function Edit($id)
    {
        $videos = Video::find($id);
        return view('admin.video.edit', compact('videos'));
    }

    public function update(Request $request, $id)
    {
        $update = Video::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'iframe' => $request->iframe,
            
        ]);
        return Redirect()->route('all.video')->with('success', 'La vidéo a été modifiée');
    }

    public function Delete($id)
    {
        $delete= Video::find($id)->delete();
        return Redirect()->back()->with('success', 'La vidéo a été supprimée');
    }
}
