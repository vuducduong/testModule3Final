<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable=[
      'name',
        'phone_number',
        'email',
        'address',
        'status',
        'manager_name',
        'agency_number',
    ];
}
