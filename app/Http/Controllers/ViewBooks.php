<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
//use App\Product;

class ViewBooks extends Controller
{
    
public function viewbook()
{
$data = DB::select('SELECT * FROM book_infos');
return view('products.books_view',['data'=>$data]);
//return view('products.index')
}
}

