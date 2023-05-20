<?php

namespace App\Repositories\Eloquent;

use App\Models\FixedIncome;
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
        $indexers = array_filter(data_get($data, 'indexers.*.id'),function ($value){
            return $value !== null;
        });
        //dd($indexers->flatten());
        try 
        {
            $this->create($data);
            $this->indexers()->attach($indexers);
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