<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;
    protected $table="counties";
    protected $fillable = [
        'name',
        "created_at",
        "updated_at",
    ];
}
