<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookInfo;

class BookInfoController extends Controller
{
    public function addNote(Request $request){
    	 BookInfo::create($request->all());
    	 echo "data has been saved";
         return redirect()->action('ViewBooks@viewbook');
    }
  
}
