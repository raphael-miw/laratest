<?php
namespace App\Http\Controllers;

use App\Article;
use App\Auteur;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    public function displayAction() {
//        var_dump(DB::select("select * FROM toto"));
//        var_dump(DB::connection()->getPdo());

        $auteur = Auteur::find(1);
        if(is_null($auteur)) {
            $auteur = new Auteur(["nom" => "raph","prenom"=>"raph"]);
            $auteur -> save();
        }
        $auteur2 = Auteur::find(3);
        if(is_null($auteur2)) {
            $auteur2 = new Auteur(["nom" => "raph2","prenom"=>"raph2"]);
            $auteur2 -> save();
        }

        /*$art = new Article();
        $art -> sujet = "titre2 !";
        $art -> contenu = "super sujet2 !!";
        $art -> auteur() -> associate($auteur);
        $art -> save();


        $art = new Article();
        $art -> sujet = "titre3 !";
        $art -> contenu = "super sujet3 !!";
        $art -> auteur() -> associate($auteur2);
        $art -> save();*/

        /** @var Auteur $auteur */
        $auteur = Auteur::find(1);


        return view("hello",[
            "titre" => "Titre !",
            "auteur" => $auteur
        ]);
    }
}