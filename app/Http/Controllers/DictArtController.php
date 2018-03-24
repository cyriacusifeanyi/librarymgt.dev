<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DictArt;
use Illuminate\Support\Facades\Input;


class DictArtController extends Controller
{
    //
    public function showUploadForm()
    {
        return view('pages.upload');
//        return $request->all();


    }

    public function storeFile(Request $request)
    {

        $data=Input::all();
        dd($data);

        if ($request->hasFile('file'))
        {
            dd('vnbmn');

            $fileName = $request->file->getClientOriginalName();
            $fileSize = $request->file->getClientSize();

            $request->file->storeAs('public/upload',$fileName);

            //saving to database
            $file = new DictArt;
            $file->name = $fileName;
            $file->size = $fileSize;
            $file->save();

            return 'yes';
        }
                return 'no file';

    }
}
