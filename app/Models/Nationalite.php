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

    protected $fillable = ['designation', 'drapeau'];

    public function ligues()
    {
        return $this->hasMany(Ligue::class, 'idnationalite');
    }

    public function nationalTeam()
    {
        return $this->hasMany(NationalTeam::class, 'idnationalite');
    }

    public function joueurs()
    {
        return $this->hasMany(Joueur::class, 'idnationalite');
    }
}
