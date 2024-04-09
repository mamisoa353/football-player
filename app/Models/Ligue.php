<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Ligue extends Model
{
    use HasFactory;
    protected $table = 'ligue';
    public $timestamps = false;
    protected $fillable = ['designation', 'idnationalite'];

    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class, 'idnationalite');
    }

    public function clubTeams()
    {
        return $this->hasMany(ClubTeam::class, 'idligue');
    }
}
