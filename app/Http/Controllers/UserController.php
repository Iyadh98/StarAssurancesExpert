<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class UserController extends Controller
{
    public function getAll(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://hackathon-star.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('experts');
        $experts=$ref->getValue();

        foreach($experts as $expert){
            $all_products[]=$expert;
        }
        return view('vertical.compteData')->with('all_products',$all_products);
    }
}
