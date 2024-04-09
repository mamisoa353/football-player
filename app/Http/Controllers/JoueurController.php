<?php 
namespace App\Http\Controllers;
use App\Models\Joueur;
use App\Models\Nationalite;
use App\Models\ClubTeam;
use App\Models\NationalTeam;
use Illuminate\Http\Request;
class JoueurController extends Controller {



 public function liste(){

 $all=Joueur::paginate(10); 

 return view('joueur.liste',['liste'=> $all]);
}


 public function add(){
$l_nationalite=Nationalite::all();
$l_clubTeam=ClubTeam::all();
$l_nationalTeam=NationalTeam::all();

 return view('joueur.add', [
'nationalite' => $l_nationalite,
'clubTeam' => $l_clubTeam,
'nationalTeam' => $l_nationalTeam
        ]);
}



 public function action_add(){

 $joueur=new Joueur();
 $joueur->nom=request('nom');
 $joueur->prenom=request('prenom');
 $joueur->dtn=request('dtn');
 $joueur->taille=request('taille');
 $joueur->profil=request('profil');
 $joueur->nbbuts=request('nbbuts');
 $joueur->idnationalite=request('idnationalite');
 $joueur->idclubteam=request('idclubteam');
 $joueur->idnationalteam=request('idnationalteam');
 $joueur->save();

 return redirect('/joueur/liste');
}



 public function action_update(){

 $joueur=Joueur::find(request('id'));
 $joueur->nom=request('nom');
 $joueur->prenom=request('prenom');
 $joueur->dtn=request('dtn');
 $joueur->taille=request('taille');
 $joueur->profil=request('profil');
 $joueur->nbbuts=request('nbbuts');
 $joueur->idnationalite=request('idnationalite');
 $joueur->idclubteam=request('idclubteam');
 $joueur->idnationalteam=request('idnationalteam');
 $joueur->save();

 return redirect('/joueur/liste');
}



 public function supprimer(){

 $joueur=Joueur::find(request('id'));
 $joueur->nom=request('nom');
 $joueur->prenom=request('prenom');
 $joueur->dtn=request('dtn');
 $joueur->taille=request('taille');
 $joueur->profil=request('profil');
 $joueur->nbbuts=request('nbbuts');
 $joueur->idnationalite=request('idnationalite');
 $joueur->idclubteam=request('idclubteam');
 $joueur->idnationalteam=request('idnationalteam');
 $joueur->delete();

 return redirect('/joueur/liste');
}}  ?>
