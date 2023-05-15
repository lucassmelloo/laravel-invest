<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditingAuditable;

class Indexer extends Model implements Auditable
{
    use HasFactory;
    use AuditingAuditable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'abreviation',
        'description'
    ];

    public function fixed_incomes()
    {
        return $this->belongsToMany(FixedIncome::class, 'fixed_income_has_indexer');
    }

}
