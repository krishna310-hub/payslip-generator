<?php

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
        Schema::create('income_details', function (Blueprint $table) {
            $table->id();
            $table->integer('basic');
            $table->integer('hra');
            $table->integer('gross_earnings');
            $table->integer('income_tax');
            $table->integer('provident_fund');
            $table->integer('total_deductions');
            $table->integer('total_net_payable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
