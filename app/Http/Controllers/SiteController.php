<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function showHome(){
        return view('Home');

    }
    function showAbout(){
        return view('About');

    }
    function showService(){
        return view ('Service');

    }
    function showPortfolio(){
        return view ('Portfolio');
    }

}
