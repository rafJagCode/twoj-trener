<?php

namespace App\Http\Controllers;

use App\Models\Certificates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    public function uploadCertificate(Request $request){
        $user= auth()->user();
        $certificate= new Certificates();
        $user = auth()->user();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2096',
        ]);

        if ($request->hasFile('image')) {
            $certificateFile = $request->file('image');
            $certificateName = time() . '.' .$certificateFile->extension();
            $certificateFile->move(public_path('certificates'), $certificateName);
            $certificate->name = $certificateName;
            $certificate->users_id=$user->id;
        }
        $certificate->save();

        return back()->withSuccess('Pomyślnie dodano certyfikat')->with('image', $certificateName);
    }

    public function delete($id){
        $certificate= Certificates::find($id);
        $certificatePath="certificates/{$certificate->name}";
        File::delete($certificatePath);
        $certificate->delete();
        return redirect('/trainer-dashboard');
    }
}
