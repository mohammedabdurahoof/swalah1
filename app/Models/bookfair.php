<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookfair extends Model
{
    use HasFactory;
    protected $fillable = ['adno','amount'];
}
