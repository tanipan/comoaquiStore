<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id', 'created_at'];
}
