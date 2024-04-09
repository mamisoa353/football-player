<?php 
namespace App\Http\Controllers;
use App\Models\Ligue;
use App\Models\Nationalite;
use Illuminate\Http\Request;
class LigueController extends Controller {



 public function liste(){

 $all=Ligue::paginate(10); 

 return view('ligue.liste',['liste'=> $all]);
}


 public function add(){
$l_nationalite=Nationalite::all();

 return view('ligue.add', [
'nationalite' => $l_nationalite
        ]);
}



 public function action_add(){

 $ligue=new Ligue();
 $ligue->designation=request('designation');
 $ligue->idnationalite=request('idnationalite');
 $ligue->save();

 return redirect('/ligue/liste');
}



 public function action_update(){

 $ligue=Ligue::find(request('id'));
 $ligue->designation=request('designation');
 $ligue->idnationalite=request('idnationalite');
 $ligue->save();

 return redirect('/ligue/liste');
}



 public function supprimer(){

 $ligue=Ligue::find(request('id'));
 $ligue->designation=request('designation');
 $ligue->idnationalite=request('idnationalite');
 $ligue->delete();

 return redirect('/ligue/liste');
}}  ?>
