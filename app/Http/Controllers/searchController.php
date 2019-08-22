<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class searchController extends Controller
{
    function index()
    {
     return view('publicpages.search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('suppliers')
         ->where('farmName', 'like', '%'.$query.'%')
         ->orWhere('phoneNo', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
     /* else
      {
       $data = DB::table('suppliers')
         ->orderBy('id', 'desc')
         ->get();
      }*/
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->farmName.'</td>
         <td>'.$row->phoneNo.'</td>
         
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}