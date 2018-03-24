<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;
use Illuminate\Support\Facades\Input;
use	Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    public function view(request $request)
    {
        $pageData =  [
            'searchBox' => $request->input('searchBox'),
            'opt1' => $request->input('opt1'),
            'opt2' => $request->input('opt2'),
            'opt3' => $request->input('opt3'),
            'opt4' => $request->input('opt4'),
            'opt5' => $request->input('opt5'),
        ];
        return view('pages.create',compact('pageData'));
    }


    public function upload(request $request)
    {
        $data=Input::all();



//        dd(Storage::url('cs035555_3.jpg'));

        $this->validate(request(),[
            'fileTitle'=>'required',
            'fileType'=>'required',

            'fileCategory'=>'required',
            'fileSource'=>'required',
            'userFile' =>'required',
            'author'=>'required',
            'publisher'=>'required',
//            'description'=>'required',
            'level'=>'required',
            'disability'=>'required',
//            'disabilityNote'=>'required',
        ]);


//        later i will go to formRequest.php 's message function to make error more understandable to user
//        public function messages()
//    {
//        return [];
//    }
//

        //saving to database
        $file = new Resource;

        $file->title = $data['fileTitle'];//title
        $file->author = $data['author'];
        $file->description = $data['description'];
        $file->type = $data['fileType'];
//        $file->source = $data['fileSource'];//////////////////////////////////////source table not yet created
        $file->publisher = $data['publisher'];
        $file->category = $data['fileCategory'];
        $file->audience = $data['level'];
        $file->disability = $data['disability'];
        if (isset($data['disabilityNote'])){
            $file->disabilityNote = $data['disabilityNote'];
        }


        if ($request->hasFile('userFile') && $data['fileSource'] == 'localsource')
        {
//            //          storing file into local
//            //            $request->file->storeAs('public/resources/'.$fileType.'/',$fileName);//to be used when i have worked out classification
//            //            or

            //          storing file into local
            $fileName = $request->userFile->getClientOriginalName();
            $path = $request->userFile->storeAs('public/resources/text',$fileName);
            $file->url = substr($path,strpos($path,'/')+1);
            // this is to exclude the public in
            // /* public/resources/text/IMG-20171118-WA0012.jpg*/
//            into => /* resources/text/IMG-20171118-WA0012.jpg*/

////                or
////              $request->userFile->storeAs('public/resources/'.$fileType.'/',$fileName);//to be used when i have worked out classification
            $file->size = $request->userFile->getClientSize();
            $file->extension = $request->userFile->getClientOriginalExtension();
//            if (Storage::disk('local')->exists($request->file->getClientOriginalName()) == 1){
////                it exists
////file already exist
//
//            }

////            $file->ISBN = $data['ISBN'];
////            $file->ISSN = $data['ISSN'];
            $file->save();
            return 'yes';
        }elseif ($data['fileSource'] == 'urlsource' && !$request->hasFile('userFile') && $data['userFile'] != null){
            ////                test if url is valid or exist
            $file->url = $data['userFile'];



            $file->save();

            return 'file URL successfully uploaded';

        }
        return 'no file or url';
//        show error flash message



    }




}
