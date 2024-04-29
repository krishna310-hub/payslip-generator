<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_details extends Model
{
    use HasFactory;

    protected $table = 'employee_details';
    protected $fillable = [
        'company_name',
        'company_address',
        'pincode',
        'country',
        'employee_name',
        'employee_id',
        'pay_period',
        'pay_date',
        'paid_days',
        'loss_of_pay_days'
    ];
}
