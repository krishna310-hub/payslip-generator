<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income_details extends Model
{
    use HasFactory;

    protected $table = 'income_details';
    protected $fillable = [
        'basic',
        'hra',
        'gross_earnings',
        'income_tax',
        'provident_fund',
        'total_deductions',
        'total_net_payable',
    ];
}
