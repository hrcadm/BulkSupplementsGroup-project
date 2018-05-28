<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\ProductSubCategories;


class ProductSubCategoriesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = ProductSubCategories::all();

        return view('subCategory.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('subCategory.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategory = ProductSubCategories::create($request->all());

        return redirect()->route('product-subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $subCategory = ProductSubCategories::findOrFail($id);

        return view('subCategory.manage', compact('subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateSubCategory = ProductSubCategories::findOrFail($id)->update($request->all());

        return redirect()->route('product-subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSubCategory = ProductSubCategories::findOrFail($id);
        $deleteSubCategory->delete();

        return redirect()->route('product-subcategories.index');
    }
}
