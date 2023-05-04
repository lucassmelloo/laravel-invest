<?php

namespace App\Http\Controllers;

use App\Models\Indexers;
use App\Models\ProductType;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FixedIncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $indexers = Indexers::all();
        $product_types = ProductType::all();
        
        return view('fixed_incomes.index', ['indexers'=>$indexers,'product_types'=>$product_types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
