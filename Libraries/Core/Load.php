<?php
    $controllerFile = "Controllers/".$controller.".php";

    if(file_exists($controllerFile)){
            require_once($controllerFile);
            $controller = new $controller();
            if(method_exists($controller,$method)){
                    $controller->{$method}($parms);
            }else{
                    require_once("Controllers/Error.php");
            }
    }else{
            require_once("Controllers/Error.php");
    }

?>