<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class FixedIncome extends Model implements Auditable
{
    use HasFactory;
    use AuditingAuditable;


    protected $fillable = [
        'applied_value',
        'due_date',
        'title',
        'application_date',
        'product_type_id'
    ];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function indexers()
    {
        return $this->belongsToMany(
            FixedIncome::class,
            'fixed_income_has_indexer',
            'indexer_id',
            'fixed_income_id'
        );
    }

}
