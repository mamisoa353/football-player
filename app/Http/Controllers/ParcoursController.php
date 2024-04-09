<?php 
namespace App\Http\Controllers;
use App\Models\Parcours;
use App\Models\ClubTeam;
use App\Models\Joueur;
use Illuminate\Http\Request;
class ParcoursController extends Controller {



 public function liste(){

 $all=Parcours::paginate(10); 

 return view('parcours.liste',['liste'=> $all]);
}


 public function add(){
$l_clubTeam=ClubTeam::all();
$l_joueur=Joueur::all();

 return view('parcours.add', [
'clubTeam' => $l_clubTeam,
'joueur' => $l_joueur
        ]);
}



 public function action_add(){

 $parcours=new Parcours();
 $parcours->datedebut=request('datedebut');
 $parcours->datefin=request('datefin');
 $parcours->idclubteam=request('idclubteam');
 $parcours->idjoueur=request('idjoueur');
 $parcours->save();

 return redirect('/parcours/liste');
}



 public function action_update(){

 $parcours=Parcours::find(request('id'));
 $parcours->datedebut=request('datedebut');
 $parcours->datefin=request('datefin');
 $parcours->idclubteam=request('idclubteam');
 $parcours->idjoueur=request('idjoueur');
 $parcours->save();

 return redirect('/parcours/liste');
}



 public function supprimer(){

 $parcours=Parcours::find(request('id'));
 $parcours->datedebut=request('datedebut');
 $parcours->datefin=request('datefin');
 $parcours->idclubteam=request('idclubteam');
 $parcours->idjoueur=request('idjoueur');
 $parcours->delete();

 return redirect('/parcours/liste');
}}  ?>
