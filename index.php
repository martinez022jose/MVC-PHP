<?php

        require_once("Config/config.php");
        require_once("Helpers/helpers.php");

        $url = !empty($_GET['url'])? $_GET['url']: "home/home";
        $arrUrl = explode("/",$url);
        $controller = $arrUrl[0];
        $method = $arrUrl[0];
        $parms = "";

        if(!empty($arrUrl[1])){
                if($arrUrl[1] != ""){
                        $method = $arrUrl[1];
                }
        }

        if(!empty($arrUrl[2])){
                if($arrUrl[2]!=""){
                        for($i=2;$i<count($arrUrl);$i++){
                                $parms.= $arrUrl[$i].";";
                        }
                }
        }

        require_once("Libraries/Core/AutoLoad.php");

        require_once("Libraries/Core/Load.php");


?>