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
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_address');
            $table->integer('pincode');
            $table->string('country');
            $table->string('employee_name');
            $table->integer('employee_id');
            $table->string('pay_period');
            $table->date('pay_date');
            $table->integer('paid_days');
            $table->integer('loss_of_pay_days');
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
