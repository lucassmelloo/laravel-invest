<?php

namespace App\Http\Controllers;

use App\Models\Indexer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IndexerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('indexers.index')->with('indexers', Indexer::with('audits')->get());
        //return view('indexers.index')->with('indexers', Indexer::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        Indexer::create($request->validate([
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
    public function update(Request $request, Indexer $indexer) : RedirectResponse
    {
        $indexer->update($request->only(['description','abreviation']));
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indexer $indexer) : RedirectResponse
    {
        $indexer->delete();
        return back();
    }
}
