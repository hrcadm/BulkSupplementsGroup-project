<?php

namespace App\Http\Controllers;

use App\Models\Product\ProductCategories;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategories::all();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('category.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategory = ProductCategories::create($request->all());

        return redirect()->route('product-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategories $productCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category = ProductCategories::findOrFail($id);

        return view('category.manage', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateCategory = ProductCategories::findOrFail($id)->update($request->all());

        return redirect()->route('product-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = ProductCategories::findOrFail($id);
        $deleteCategory->delete();

        return redirect()->route('product-categories.index');
    }
}
