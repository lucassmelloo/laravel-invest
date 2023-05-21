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
                        ->filter(function ($value) {
                            return $value['id'] !== null;
                        });

        try 
        {
            $fixedIncome = $this->model->create($data);
            //dd($indexers);
            foreach ($indexers as $indexer) {
                $fixedIncome->indexers()->attach($indexer['id'], ['value' => $indexer['value']]);
            }
            DB::commit();
        }
        catch( Exception $err)
        {
            DB::rollBack();
            dd($err);
        }
        
    }

    public function indexers() {
        
    }

}