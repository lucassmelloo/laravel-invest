<?php

namespace App\Http\Controllers;

use App\Models\Indexers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IndexerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(ProductType::all());
        return view('indexers.index')->with('indexers',Indexers::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) : RedirectResponse
    {

        Indexers::create($request->validate([
            'abreviation'=>['required','max:255'],
            'description' => ['required','max:255']
        ]));

        return back()->with(['status'=>'productType-created']);
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
    public function update(Request $request, Indexers $indexer) : RedirectResponse
    {   
        $indexer->update($request->only(['description','abreviation']));
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Indexers $indexers) : RedirectResponse
    {
        $indexers->delete();

        return back();
    }
}
