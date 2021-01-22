<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film_actor extends Model
{
    use HasFactory;
    protected $table = "film_actor";
    public $timestamps = false;
}
