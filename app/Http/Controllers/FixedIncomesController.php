<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFixedIncomeRequest;
use App\Models\FixedIncome;
use App\Models\Indexer;
use App\Models\ProductType;
use App\Repositories\FixedIncomeRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FixedIncomesController extends Controller
{

    public function __construct(protected FixedIncomeRepositoryInterface $repository){

    }

    public function index(): View
    {
        $indexers = Indexer::all();
        $product_types = ProductType::all();
        $fixed_incomes = $this->repository->all();

        return view(
            'fixed_incomes.index',
            [
                'indexers'=>$indexers,
                'product_types'=>$product_types,
                'fixed_incomes' =>$fixed_incomes
            ]);
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
    public function store(CreateFixedIncomeRequest $request) : RedirectResponse
    {

        $this->repository->createFixedIncomeWithIndexers($request->all());
        return back();
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
    public function destroy(FixedIncome $fixedIncome) : RedirectResponse
    {
        $this->repository->delete($fixedIncome->id);

        return back();
    }
}
