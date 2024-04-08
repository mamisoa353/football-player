<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produit';
    protected $fillable = [
        'id',
        'Nom',
        'Marque',
    ];
    public static function getAll(){
        return Produit::all();
    }
}
