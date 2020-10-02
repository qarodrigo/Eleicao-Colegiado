<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\VotersImport;

class UploadFileController extends Controller
{
    public function getPageUpload(){
        return view('candidates.uploadFile');
    }


    public function fileImport (Request $request){
       Excel::import(new VotersImport, $request->file('newfile')->store('files'));
       return view('candidates.uploadFile');
    }
}
