<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class NationalTeam extends Model
{
    use HasFactory;
    protected $table = 'nationalteam';
    public $timestamps = false;
    protected $fillable = ['nom', 'profil', 'code', 'idnationalite'];

    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class, 'idnationalite');
    }

    public function joueurs()
    {
        return $this->hasMany(Joueur::class, 'idnationalteam');
    }
}
