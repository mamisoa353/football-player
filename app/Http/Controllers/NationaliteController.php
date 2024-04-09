<?php 
namespace App\Http\Controllers;
use App\Models\Nationalite;
use Illuminate\Http\Request;
class NationaliteController extends Controller {



 public function liste(){

 $all=Nationalite::paginate(10); 

 return view('nationalite.liste',['liste'=> $all]);
}


 public function add(){

 return view('nationalite.add', [
        ]);
}



 public function action_add(){

 $nationalite=new Nationalite();
 $nationalite->designation=request('designation');
 $nationalite->drapeau=request('drapeau');
 $nationalite->save();

 return redirect('/nationalite/liste');
}



 public function action_update(){

 $nationalite=Nationalite::find(request('id'));
 $nationalite->designation=request('designation');
 $nationalite->drapeau=request('drapeau');
 $nationalite->save();

 return redirect('/nationalite/liste');
}



 public function supprimer(){

 $nationalite=Nationalite::find(request('id'));
 $nationalite->designation=request('designation');
 $nationalite->drapeau=request('drapeau');
 $nationalite->delete();

 return redirect('/nationalite/liste');
}}  ?>
