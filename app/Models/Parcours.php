<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Parcours extends Model
{
    use HasFactory;
    protected $table = 'parcours';
    public $timestamps = false;
    protected $fillable = ['date_debut', 'date_fin', 'idclubteam', 'idjoueur'];

    public function clubTeam()
    {
        return $this->belongsTo(ClubTeam::class, 'idclubteam');
    }

    public function joueur()
    {
        return $this->belongsTo(Joueur::class, 'idjoueur');
    }
}
