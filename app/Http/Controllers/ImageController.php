<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function save(Request $request)
    {
        $user = auth()->user();
        $image = new Image();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2096',
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.' .$imageFile->extension();
            $imageFile->move(public_path('images/galery'), $imageName);
            $image->name = $imageName;
            $image->users_id=$user->id;
        }
        $image->save();
        return back()->withSuccess('Pomyślnie dodano zdjęcie')->with('image', $imageName);
    }

    public function delete($id){
        $img= Image::find($id);
        $imgPath="images/galery/{$img->name}";
        File::delete($imgPath); //z folderu
        $img->delete(); //z bazy
        return redirect('/trainer-dashboard');
    }
}
