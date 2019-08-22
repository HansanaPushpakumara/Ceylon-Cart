<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advertisement;

class publicController extends Controller
{
    //
    public function index(){
        $adData=advertisement::all();
        //return $adData;
        return view('publicpages.home')->with('adData',$adData);
    }
}
