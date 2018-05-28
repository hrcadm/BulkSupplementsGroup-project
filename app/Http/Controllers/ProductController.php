<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use App\Models\Product\ProductCategories;
use App\Models\Product\ProductSubCategories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategories::all()->pluck('name', 'id');
        $subCategories = ProductSubCategories::all();
        $selectedSubCats = [];

        return view('product.manage', compact('categories', 'subCategories', 'selectedSubCats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());


        $product->category()->sync($request->category, $product->id);

        foreach($request->sub_category as $subCats)
        {
            $product->subcategory()->sync($request->sub_category, $product->id);
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = ProductCategories::all()->pluck('name', 'id');
        $subCategories = ProductSubCategories::all();

        $selectedSubCats = [];

        foreach($product->subCategory as $subCats)
        {
            $selectedSubCats[] = $subCats->id;
        }

        return view('product.manage', compact('product', 'categories', 'subCategories', 'selectedSubCats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        $product->category()->sync($request->category, $product->id);

        foreach($request->sub_category as $subCats)
        {
            $product->subcategory()->sync($request->sub_category, $product->id);
        }

        return view('product.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
