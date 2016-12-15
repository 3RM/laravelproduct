<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use App\Admin;
use App\Product;

class AdminController extends Controller {

    public function index() {
	$products = Product::latest()->paginate(4);

	return view('products.admin.index', [
	    'products' => $products,
	]);
    }

    public function create() {
	return view('products.admin.create');
    }

    public function store(Request $request) {
	$this->validate($request, [
		    'name' => 'required|max:255',
		    'description' => 'required',
	]);

	$product = new Product;
	$product->name = $request->name;
	$product->description = $request->description;
	$product->save();

	return redirect()->route('admin');
    }

    public function destroy(Product $product) {
	$product->delete();
	
	return redirect()->route('admin');
    }

//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index(Request $request)
//    {
//        $data = [
//			'products' => Admin::all(),
//			'count' => Admin::count()
//		];
//		return view('index',$data);
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//       //
//    }
}
