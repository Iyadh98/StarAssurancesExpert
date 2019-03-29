<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Log;

class LivraisonController extends Controller
{
    public function getAll(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://agil-aee92.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('livraison');
        $livraisons=$ref->getValue();

        foreach($livraisons as $livraison){
            $all_livraisons[]=$livraison;

        }

        Log::info($all_livraisons);
        return view('vertical.livraisonData')->with('all_livraisons',$all_livraisons);
    }

    public function getDetails($id){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://agil-aee92.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('commande');
        $commandes=$ref->getValue();

        foreach($commandes as $commande){
            $all_commandes[]=$commande;
        }
        return view('vertical.ajoutCommandeLivraison')->with('id',$id)->with('all_commandes',$all_commandes);
    }
}
