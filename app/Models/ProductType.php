<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class ProductType extends Model implements Auditable
{
    use HasFactory;
    use AuditingAuditable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'abbreviation',
        'description'
    ];

    public function fixed_incomes(): HasMany
    {
        return $this->hasMany(FixedIncome::class);
    }
}
