<?php

namespace App;

abstract class AbstractManager {

    private static $connection;

    //! connexion
    protected static function connect() {
        self::$connection = DAO::getConnection();
    }

    //! getOneOrNullResult
    protected static function getOneOrNullResult($row, $class) {
        if ($row != null) {
            return new $class($row);
        }
        return null;
    }

    //! getResults
    protected static function getResults($rows, $class) {

        $results = [];

        if ($rows != null) {
            foreach ($rows as $row) {
                $results[] = new $class($row);
            }
        }
        return $results;
    }

    //! getSingleScalarResult
    protected function getSingleScalarResult($row) {

        if ($row != null) {
            $value = array_values($row);
            return $value[0];
        }
        return false;
    }

    //! select
    protected static function select($sql, $params = null, $multiple = true) {
        $stmt = self::$connection->prepare($sql);
        $stmt->execute($params);

        if ($multiple) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }

    //! create
    protected static function create($sql, $params) {
        $stmt = self::$connection->prepare($sql);
        $stmt->execute($params);
        return self::$connection->lastInsertId();
    }

    //! update
    protected static function update($sql, $params) {
        try {
            $stmt = self::$connection->prepare($sql);
            return $stmt->execute($params);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    //! delete
    protected static function delete($sql, $params) {
        try {
            $stmt = self::$connection->prepare($sql);
            return $stmt->execute($params);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
