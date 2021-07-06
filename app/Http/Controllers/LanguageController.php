<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // public function index(Request $request,$language)
    // {
    //     if($language){
    //         Session::put('language',$language);
    //     }
    //     return redirect()->back();
    //     //return view("index");
    // }
    public function index($locale){
        // dd($locale);
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
