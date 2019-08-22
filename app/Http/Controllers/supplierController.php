<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\supplier;
use Auth;
use DB;

class supplierController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function index(){
        $id=Auth::user()->id;
        
        $supplierData=DB::select("select * from suppliers where supplierId = '$id'");

        //return $supplierData;

       return view('supplierpages.index')->with('supplierData',$supplierData);
    }

    protected function editprofile(){
        $id=Auth::user()->id;
        
        $supplierData=DB::select("select * from suppliers where supplierId = '$id'");

        //return $supplierData;

       return view('supplierpages.editprofile')->with('supplierData',$supplierData);
    }

    protected function updateprofile(Request $request){
        $id=Auth::user()->id;
        
        $supplierData=DB::select("select * from suppliers where supplierId = '$id'");

        
        $name=$request->name;
        $phoneNo=$request->phoneNo;

        $query=DB::update("update suppliers set name = '$name', phoneNo = '$phoneNo' where supplierId = '$id'");

        //return $supplierData;

       //return view('supplierpages.editprofile')->with('supplierData',$supplierData);
       return redirect('/supplier/editprofile')->with('success','Profile Updated'); 

    }


}
