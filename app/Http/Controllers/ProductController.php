<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function bookindex()
    {
        $products = Product::all()->toArray();
        return view('products.bookindex', compact('products'));
    }*/
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
       return view('products.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
	

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function bookview(){
        
        return view('products.books_view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /*public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product','id'));
    }*/
    public function add(Request $request){
        $noteId = $request->input('noteId');
        $noteName = $request->input('noteName');
        $noteType = $request->input('noteType');
        return "NoteId: " . $noteId . " and NoteName: " . $noteName."NoteType: ".$noteType;

        print_r($request->all());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /* public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric'
        ]);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products')->with('success','Product has been updated');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }*/
    public function getApi(){
        $client = new Client();
        $res = $client->get('https://api.coursera.org/api/courses.v1');
        $data=json_decode($res->getBody());
        return view('products.index')->with('data',$data);
    }
}
