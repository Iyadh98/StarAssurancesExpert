<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class CommandeController extends Controller
{
    public function getAll(){
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

        return view('vertical.commandeData')->with('all_commandes',$all_commandes);
    }


}
