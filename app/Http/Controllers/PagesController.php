<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PagesController extends Controller
{
    public function index(){

        $services = Service::orderBy('created_at','desc')->get();
        return view('pages.index')->with('services',$services);
    }
}
