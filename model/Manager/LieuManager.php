<?php

namespace Model\Manager;

use App\AbstractManager;

class LieuManager extends AbstractManager {
    //! Propriétés
    private static $className = "Model\Entity\Lieu";

    //! Constructeur
    public function __construct() {
        self::connect();
    }

    //! Méthodes
    public function findAll() {
        $sql = "SELECT *
                FROM lieu";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id) {
        $sql = "SELECT * 
                FROM lieu 
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}