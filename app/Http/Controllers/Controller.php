<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Singleton;
use App\Models\Factory;
use App\Models\Facade;
use App\Models\Aggregation;
use App\Models\Concession;
use App\Models\Sujet;
use App\Models\Observer;
use App\Models\Strategie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function singleton () {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();

        return view('Singleton', ['a' => $a, 'b' => $b]);
    }

    public function factory () {
        $opel = Factory::getInstance('Opel');
        $renault = Factory::getInstance('Renault');

        return view('Factory', ['opel' => $opel, 'renault' => $renault]);
    }

    public function facade () {

        $voitures = [];
        $concessions = [];
        $factures = [];
        for ($i = 0; $i<3; $i++)  {
            list($concessions[], $factures[]) = Facade::commander();
        }

        return view('Facade', ['concessions' => $concessions, 'factures' => $factures]);
    }

    public function aggregation(){
        $concession = new Concession();
        $concession->add(Factory::getInstance('Opel')->get_class());
        $concession->add(Factory::getInstance('Renault')->get_class());
        $aggregation= $concession->getIterator();
        return ['Aggregation', ["agg"=>$aggregation]];
    }

    public function observer(){
        $sujet = new Sujet();
        $sujet->addObserver(new Observer());
        $sujet->addObserver(new Observer());
        $sujet->notify();
        return view('Observer', ["sujet"=>$sujet]);
    }

    public function strategie(){
        $opel = Factory::getInstance('Opel');
        $renault = Factory::getInstance('Renault');
        $factureLineOpel = new Strategie ();
        $factureLineOpel->FactureLine($opel);
        $factureLineRenault = new Strategie();
        $factureLineRenault->FactureLine($renault);

        return view('Strategie', ['opel' => $factureLineOpel->getFactureLine(), 'renault' => $factureLineRenault->getFactureLine()]);
    }

    public function template(){
        $voiture1 = Factory::getInstance('Opel');
        $voiture2 = Factory::getInstance('Renault');
        return view('Template', ['voiture1' => $voiture1, 'voiture2' => $voiture2]);
    }


    //QUESTION 8 :
    //Le design pattern commande est utilisé grâce à un controlleur dans le but d'instancier les classes et utiliser leurs fonctions
}
