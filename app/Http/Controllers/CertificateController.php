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

        $request->validate([
            'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2096',
        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('certificates'), $fileName);
        $certificate->name=$fileName;
        $certificate->save();

        return redirect('/trainer-dashboard')->withSuccess('Pomyślnie dodano certyfikat')->with('certificate', $fileName);
    }

    public function delete($id){
        $certificate= Certificates::find($id);
        $certificatePath="certificates/{$certificate->name}";
        File::delete($certificatePath);
        $certificate->delete();
        return redirect('/trainer-dashboard');

    }
}
