<?php

use App\Models\FixedIncome;
use App\Models\Indexer;
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
        Schema::create('fixed_income_has_indexer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Indexer::class)->constrained();
            $table->foreignIdFor(FixedIncome::class)->constrained();
            $table->float('value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_income_has_indexer');
    }
};
