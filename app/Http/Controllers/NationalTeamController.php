<?php 
namespace App\Http\Controllers;
use App\Models\NationalTeam;
use App\Models\Nationalite;
use Illuminate\Http\Request;
class NationalTeamController extends Controller {



 public function liste(){

 $all=NationalTeam::paginate(10); 

 return view('nationalteam.liste',['liste'=> $all]);
}


 public function add(){
$l_nationalite=Nationalite::all();

 return view('nationalteam.add', [
'nationalite' => $l_nationalite
        ]);
}



 public function action_add(){

 $nationalteam=new NationalTeam();
 $nationalteam->nom=request('nom');
 $nationalteam->profil=request('profil');
 $nationalteam->code=request('code');
 $nationalteam->idnationalite=request('idnationalite');
 $nationalteam->save();

 return redirect('/nationalteam/liste');
}



 public function action_update(){

 $nationalteam=NationalTeam::find(request('id'));
 $nationalteam->nom=request('nom');
 $nationalteam->profil=request('profil');
 $nationalteam->code=request('code');
 $nationalteam->idnationalite=request('idnationalite');
 $nationalteam->save();

 return redirect('/nationalteam/liste');
}



 public function supprimer(){

 $nationalteam=NationalTeam::find(request('id'));
 $nationalteam->nom=request('nom');
 $nationalteam->profil=request('profil');
 $nationalteam->code=request('code');
 $nationalteam->idnationalite=request('idnationalite');
 $nationalteam->delete();

 return redirect('/nationalteam/liste');
}}  ?>
