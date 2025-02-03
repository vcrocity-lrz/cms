<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'first_name',
        'last_name',
    ];
}
