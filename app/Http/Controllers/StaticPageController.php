<?php

namespace Library\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //

    public function faq()
    {
        return view('pages.faq');

    }

    public function sitemap()
    {
        return view('pages.sitemap');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function help()
    {
        return view('pages.help');
    }

    public function aboutUs()
    {
        return view('pages.about');
    }

    public function useOfLibrary()
    {
        return view('pages.useoflibrary');

    }
    public function searchTip()
    {
        return view('pages.useoflibrary/#searchtip');

    }
}
