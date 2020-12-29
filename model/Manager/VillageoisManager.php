<?php

namespace Model\Manager;

use App\AbstractManager;

class VillageoisManager extends AbstractManager {
    //! Propriétés
    private static $className = "Model\Entity\Villageois";

    //! Constructeur
    public function __construct() {
        self::connect();
    }

    //! Méthodes
    public function findAll() {
        $sql = "SELECT *
                FROM villageois";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id) {
        $sql = "SELECT *
                FROM villageois
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}
