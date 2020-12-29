<?php

namespace Model\Manager;

use App\AbstractManager;

class ComposeManager extends AbstractManager {
    //! Propriétés
    private static $className = "Model\Entity\Compose";

    //! Constructeur
    public function __construct() {
        self::connect();
    }

    //! Méthodes
    public function findAll() {
        $sql = "SELECT *
                FROM compose";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id) {
        $sql = "SELECT *
                FROM compose
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}
