<?php

namespace App\Repositories\Eloquent;

use App\Models\FixedIncome;

class FixedIncomeRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new FixedIncome());
        
    }

}