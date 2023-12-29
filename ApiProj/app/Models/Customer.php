<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'sex',
        'birth_date'
    ];
}
