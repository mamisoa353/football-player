<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Joueur extends Model
{
    use HasFactory;
    protected $table = 'joueur';
    public $timestamps = false;
    protected $fillable = ['nom', 'prenom', 'dtn', 'taille', 'profil', 'nb_buts', 'idnationalite', 'idclubteam', 'idnationalteam'];

    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class, 'idnationalite');
    }

    public function clubTeam()
    {
        return $this->belongsTo(ClubTeam::class, 'idclubteam');
    }

    public function nationalTeam()
    {
        return $this->belongsTo(NationalTeam::class, 'idnationalteam');
    }
}
