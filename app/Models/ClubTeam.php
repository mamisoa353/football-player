<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class ClubTeam extends Model
{
    use HasFactory;
    protected $table = 'clubteam';
    public $timestamps = false;
    protected $fillable = ['nom', 'profil', 'code', 'idligue'];

    public function ligue()
    {
        return $this->belongsTo(Ligue::class, 'idligue');
    }

    public function joueurs()
    {
        return $this->hasMany(Joueur::class, 'idclubteam');
    }
}
