<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{

    public function RechercheProduit(Request $request)
    {
        $query = Produit::query();
         DB::enableQueryLog();
        $query->orWhere('nom', 'ilike', '%' . $request->input('argument') . '%');
        $query->orWhere('marque', 'ilike ' , $request->input('argument'));
        $query = $query->get();
        // Vos requêtes SQL ici
        // // Récupérer les requêtes SQL enregistrées
         $queries = DB::getQueryLog();

        // // Afficher les requêtes SQL à l'aide de dd()
        // dd($queries);
        // $products = $query;
        return view('liste-produit', [
            'produit' => $query
        ]);

        // return view('products.index', compact('products'));

    }
}
