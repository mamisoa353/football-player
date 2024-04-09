<?php 
namespace App\Http\Controllers;
use App\Models\ClubTeam;
use App\Models\Ligue;
use Illuminate\Http\Request;
class ClubTeamController extends Controller {



 public function liste(){

 $all=ClubTeam::paginate(10); 

 return view('clubteam.liste',['liste'=> $all]);
}


 public function add(){
$l_ligue=Ligue::all();

 return view('clubteam.add', [
'ligue' => $l_ligue
        ]);
}



 public function action_add(){

 $clubteam=new ClubTeam();
 $clubteam->nom=request('nom');
 $clubteam->profil=request('profil');
 $clubteam->code=request('code');
 $clubteam->idligue=request('idligue');
 $clubteam->save();

 return redirect('/clubteam/liste');
}



 public function action_update(){

 $clubteam=ClubTeam::find(request('id'));
 $clubteam->nom=request('nom');
 $clubteam->profil=request('profil');
 $clubteam->code=request('code');
 $clubteam->idligue=request('idligue');
 $clubteam->save();

 return redirect('/clubteam/liste');
}



 public function supprimer(){

 $clubteam=ClubTeam::find(request('id'));
 $clubteam->nom=request('nom');
 $clubteam->profil=request('profil');
 $clubteam->code=request('code');
 $clubteam->idligue=request('idligue');
 $clubteam->delete();

 return redirect('/clubteam/liste');
}}  ?>
