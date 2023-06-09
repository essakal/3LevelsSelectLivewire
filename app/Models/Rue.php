<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rue extends Model
{
    use HasFactory;
    protected $table="rues";
    protected $fillable = [
        'name',
        'city_id'
    ];
}
