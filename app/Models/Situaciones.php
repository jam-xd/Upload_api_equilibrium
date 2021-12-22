<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situaciones extends Model
{
    use HasFactory;

    protected $table = 'Situaciones';

    protected $fillable = ['Actor'];
    
    protected $guarded = ['id'];

    
}
