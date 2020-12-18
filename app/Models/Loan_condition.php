<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_condition extends Model
{
    use HasFactory;
    protected $fillable = ['name_loan_condition','Comment'];
}
