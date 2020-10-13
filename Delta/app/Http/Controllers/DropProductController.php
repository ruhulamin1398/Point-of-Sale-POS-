<?php

namespace App\Http\Controllers;

use App\Http\Requests\DropProductRequest;
use App\Models\dropProduct;
use App\Models\Product;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DropProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = setting::where('table_name','drop_products')->first();
        $settings->setting= json_decode(  json_decode(  $settings->setting,true),true);

        
        $dataArray=[
            'settings'=>$settings,
            'items' => dropProduct::all(),
            'products'=> product::all(),
        ];


        return view('product.dropProduct.index', compact('dataArray'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DropProductRequest $request)
    {



        $dropProduct= new dropProduct;
        //dropProduct::create($request->all());
        $dropProduct->user_id=1;
        $dropProduct->product_id=$request->product_id;
        $dropProduct->quantity=$request->quantity;
        $dropProduct->comment=$request->comment;
        $dropProduct->save();

        $product = product::find($dropProduct->product_id);
        return $product;

        return $dropProduct;

        return redirect()->back()->withSuccess(['Successfully Created']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dropProduct  $dropProduct
     * @return \Illuminate\Http\Response
     */
    public function show(dropProduct $dropProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dropProduct  $dropProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(dropProduct $dropProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dropProduct  $dropProduct
     * @return \Illuminate\Http\Response
     */
    public function update(DropProductRequest $request, dropProduct $dropProduct)
    {
        
        $dropProduct->update($request->all());
        return redirect()->back()->withSuccess(['Successfully Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dropProduct  $dropProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(dropProduct $dropProduct)
    {
        $dropProduct->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }
}
