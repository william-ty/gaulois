<?php

namespace App;

abstract class AbstractEntity {

    protected function hydrate($data) {

        foreach ($data as $field => $value) {

            $fieldArray = explode("_", $field); //* ex : user_id => ["user","id"]

            if (isset($fieldArray[1]) && $fieldArray[1] == "id") {

                $manName = ucfirst($fieldArray[0]) . "Manager";
                $FQCName = "Model\Manager" . DS . $manName; // = Model\Manager\UserManager    
                $man = new $FQCName(); // = new Model\Manager\UserManager()     
                $value = $man->findOneById($value);
            }

            //* fielArray = userName
            //* method = setUserName
            $method = "set" . ucfirst($fieldArray[0]);

            //* user->setUsername("micka");
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}
