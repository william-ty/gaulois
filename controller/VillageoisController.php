    <?php

namespace Controller;

use Model\Manager\VillageoisManager;

class VillageoisController {
    public function allVillageois() {
        $manVillageois = new VillageoisManager();
        $villageois = $manVillageois->findAll();

        return [
            "view" => "villageois/villageois.php",
            "data" => [
                "villageois" => $villageois
            ],
            "titrePage" => "Liste des Villageois"
        ];
    }
}
