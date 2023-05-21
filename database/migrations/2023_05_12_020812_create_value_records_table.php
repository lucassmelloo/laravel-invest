<?php

use App\Models\FixedIncome;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('value_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('record_date');
            $table->float('record_liquid_value');
            $table->float('record_gross_value')->nullable();
            $table->foreignIdFor(FixedIncome::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('value_records');
    }
};
