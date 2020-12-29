<?php 

namespace Controller;

use Model\Manager\SpecialiteManager;

class SpecialiteController {
    public function allSpecialites() {
        $manSpecialite = new SpecialiteManager();
        $specialites = $manSpecialite->findAll();

        return [
            "view" => "specialite/specialites.php",
            "data" => [
                "specialites" => $specialites
            ],
            "titrePage" => "Liste des Specialités",
        ];
    }
}