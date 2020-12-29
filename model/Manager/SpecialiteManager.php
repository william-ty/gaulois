<?php

namespace Model\Manager;

use App\AbstractManager;

class SpecialiteManager extends AbstractManager {
    //! Propriétés
    private static $className = "Model\Entity\Specialite";

    //! Constructeur
    public function __construct() {
        self::connect();
    }

    //! Méthodes
    public function findAll() {
        $sql = "SELECT *
                FROM specialite";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id) {
        $sql = "SELECT * 
                FROM specialite 
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}
