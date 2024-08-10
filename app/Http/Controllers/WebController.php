<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Str;

class WebController extends Controller
{

    public function index()
    {
        return view('web.index');
    }
    public function searchMobile()
    {
        return view('web.search-mobile');
    }
    public function productsList()
    {
        return view('web.products-list');
    }
    public function discount()
    {
        return view('web.discount');
    }
    public function money()
    {
        return view('web.discount');
    }
    public function campaigns()
    {
        return view('web.campaigns');
    }
}
