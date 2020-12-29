<?php 

namespace Controller;

use Model\Manager\LieuManager;

class LieuController {
    public function allLieux() {
        $manLieu = new LieuManager();
        $lieux = $manLieu->findAll();

        return [
            "view" => "lieu/lieux.php",
            "data" => [
                "lieux" => $lieux
            ],
            "titrePage" => "Liste des Lieux",
        ];
    }
}