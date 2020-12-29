<?php

namespace Controller;

use Model\Manager\PotionManager;
use Model\Manager\IngredientManager;
use Model\Manager\ComposeManager;
use App\Session;
use App\Router;


class PotionController{

    public function allPotions(){
        
        $manPotion = new PotionManager();
        $potions = $manPotion->findAll();

        return [
            "view" => "Potion/potions.php",
            "data" => [
                "potions" => $potions
            ],
            "titrePage" => "Liste des potions"
        ];
    }

    public function detailPotion($id){

        $manPotion = new PotionManager();
        $potion = $manPotion->findOneById($id);
        $manIngredient = new Ingredientmanager();
        $ingredients = $manIngredient->findAll();
        $manCompose = new ComposeManager();
        $compose = $manCompose->findAll();

        return [
            "view" => "Potion/detailPotion.php",
            "data" => [
                "potion" => $potion,
                "ingredients" => $ingredients,
                "compose" => $compose
            ],
            "titrePage" => "Détail potion"
        ];
    }

    // public function newActeur(){

    //     return [
    //         "view" => "Acteur/newActeur.php",
    //         "titrepage" => "Ajouter un acteur"
    //     ];
    // }

    //     public function addActeur(){
    //     if(!empty($_POST)){

    //         $prenomActeur = filter_input(INPUT_POST, "prenomActeur", FILTER_SANITIZE_STRING);
    //         $nomActeur = filter_input(INPUT_POST, "nomActeur", FILTER_SANITIZE_STRING);
    //         $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
    //         $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

    //         if($nomActeur && $prenomActeur && $dateNaissance && $sexe){
    //             $manActeur = new ActeurManager();
    //             $manActeur->addActeur($nomActeur, $prenomActeur, $dateNaissance, $sexe);

    //             Session::addFlash("success", "Nouvel acteur ajouté avec succès !");
    //             Router::redirectTo("acteur", "allActeurs");
    //         } else {
    //             Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
    //         }
    //         Router::redirectTo("home");
    //     }     
    // }

    // public function deleteActeur($id){
    //     $manActeur = new ActeurManager();
    //     $acteur = $manActeur->findOneById($id);
    //     $manActeur->deleteActeur($id);
    //     Router::redirectTo("acteur", "allActeurs");
    // }

    // public function editActeur($id){
    //     $manActeur = new ActeurManager();
    //     $acteur = $manActeur->findOneById($id);

    //     return [
    //         "view" => "Acteur/editActeur.php",
    //         "data" => [
    //             "acteur" => $acteur,
    //         ],
    //         "titrepage" => "Modifier l'acteur"
    //     ];
    // }

    // public function updateActeur(){
    //     if(!empty($_POST)){

    //         $prenomActeur = filter_input(INPUT_POST, "prenomActeur", FILTER_SANITIZE_STRING);
    //         $nomActeur = filter_input(INPUT_POST, "nomActeur", FILTER_SANITIZE_STRING);
    //         $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_STRING);
    //         $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_STRING);

    //         if($nomActeur && $prenomActeur && $dateNaissance && $sexe){
    //             $manActeur = new ActeurManager();
    //             $manActeur->updateActeur($nomActeur, $prenomActeur, $dateNaissance, $sexe);

    //             Session::addFlash("success", "Acteur modifié avec succès !");
    //             Router::redirectTo("acteur", "allActeurs");
    //         } else {
    //             Session::addFlash("error", "Un problème est survenu, veuillez réessayer.");
    //         }
    //         Router::redirectTo("home");
    //     }     
    // }
}

