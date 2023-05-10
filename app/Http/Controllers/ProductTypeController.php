<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductType\UpdateProductTypeRequest;
use App\Http\Requests\ProductType\DeleteProductTypeRequest;
use App\Models\ProductType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(ProductType::all());
        return view('product_type.index')->with('product_types',ProductType::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) 
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        ProductType::create($request->validate([
            'abreviation'=>['required','max:255'],
            'description' => ['required','max:255']
        ]));

        return back()->with(['status'=>'productType-created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductType $productType) : RedirectResponse
    {
        $productType->update($request->only(['description','abreviation']));
        return back()->with(['status'=>'productType-updated']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteProductTypeRequest $request, ProductType $productType) : RedirectResponse
    {
        $productType->delete();
        return back()->with(['status'=>'productType-deleted']);
    }
}
