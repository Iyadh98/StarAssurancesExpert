<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
class FirebaseController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://hackathon-star.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('compte');
        $produits=$ref->getValue();

        foreach($produits as $produit){
            $all_products[]=$produit;
        }
        return view('vertical.commandeData')->with('all_products',$all_products);
    }
}
