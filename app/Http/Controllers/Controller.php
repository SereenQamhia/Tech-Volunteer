<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
  function showhome()
  {
       
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();
        $volanters = DB::table('paypals')->get();
        // dd($categories);
        return view('pages.index', compact('categories', 'products', 'users', 'volanters'));
   
  }
    function showabout()
    {
        return view('pages.about');
    }
    function showsingle()
    {
        return view('pages.single');
    }
    function showcontact(){
        return view('pages.contact');
    }
    function showcauses()
    {
        return view('pages.causes');
    }
    function shownews()
    {
        return view('pages.news');
    }
}
