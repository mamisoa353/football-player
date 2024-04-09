<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Nationalite extends Model
{
    use HasFactory;
    protected $table = 'nationalite';
    public $timestamps = false;
}
