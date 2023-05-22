<?php

namespace App\Repositories\Eloquent;

use App\Models\FixedIncome;
use App\Models\Indexer;
use App\Repositories\FixedIncomeRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class FixedIncomeRepository extends BaseRepository implements FixedIncomeRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new FixedIncome());
        
    }

    public function createFixedIncomeWithIndexers($data)
    {
        DB::beginTransaction();

        $indexers = collect(data_get($data, 'indexers.*'))
                        ->reject(function ($value) {
                            return $value['id'] !== null;
                        });

        try 
        {
            $fixedIncome = $this->model->create($data);

            $indexers->each(function ($indexer) use ($fixedIncome) {
                $fixedIncome->indexers()->attach($indexer['id'], ['value' => $indexer['value']]);
            });

            DB::commit();
        }
        catch( Exception $err)
        {
            DB::rollBack();
        }
        
    }

    public function indexers() {
        
    }

}