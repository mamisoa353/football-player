<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     *@return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function listProduit()
    {
        $produit = Produit::getAll();
        return view('liste-produit', [
            'produit' => $produit
        ]);
    }

    public function adminHome()
    {
        return view('adminHome');
    }
    public function commandeProduit(Request $request)
    {
        $produit = Produit::find($request->id);
        $user = auth()->user();
        $mail = new SendEmail($user, $produit);
        $mail->commandeProduit();

        // return view('emails', [
        //     'user' =>  auth()->user(),
        //     'produit' => $produit
        // ]);

        return redirect(url('liste-produit'));
    }
}
