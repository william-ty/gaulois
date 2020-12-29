<?php

namespace App;

use Controller\HomeController;

abstract class Router {

    public static function handleRequest($get) {
        $ctrlname = "Controller\HomeController";
        $method = "index";

        if (isset($get['ctrl'])) {
            // ctrl = salarie
            // Controller\SalarieController
            $ctrlname = "Controller\\" . ucfirst($get['ctrl']) . "Controller";
        }

        if (isset($get['method']) && class_exists($ctrlname)) {
            // method = allSalaries
            // $ctrl = new SalarieController();
            $ctrl = new $ctrlname();
        } else $ctrl = new HomeController();

        if (isset($get['id'])) {
            $id = $get['id'];
        } else $id = null;

        if (isset($get['method']) && method_exists($ctrl, $get['method'])) {
            // $method = allSalaries
            $method = $get['method'];
        } else Router::redirectTo("home", "index", 1);

        // Controller\SalarieController->allSalaries();
        return $ctrl->$method($id);
    }

    public static function redirectTo($ctrl = null, $method = null, $id = null) {
        header("Location:?ctrl=" . $ctrl . "&method=" . $method . "&id=" . $id);
        die();
    }
}
