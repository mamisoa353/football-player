<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
class Joueur extends Model {
use HasFactory;
protected $table='joueur';
public $timestamps = false;

}  ?>
