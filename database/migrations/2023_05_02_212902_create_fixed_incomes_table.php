<?php

use App\Models\ProductType;
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
        Schema::create('fixed_incomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('applied_value');
            $table->date('due_date');
            $table->string('title');
            $table->date('application_date');
            $table->foreignIdFor(ProductType::class)->constrained();
            $table->integer('quotas')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_incomes');
    }
};
