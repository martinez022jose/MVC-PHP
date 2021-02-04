<?php
    function base_url(){
        return BASE_URL;
    }

    function media(){
        return BASE_URL."Assets/";
    }

    function headerAdmin($data=""){
        $viewHeader = "Views/Template/headerAdmin.php";
        require_once($viewHeader);

    }

    function footerAdmin($data=""){
        $viewFooter = "Views/Template/footerAdmin.php";
        require_once($viewFooter);

    }

    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }

    function passGenerate($length = 10){
        $pass = "";
        $longitudPass = $length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $longitudCadena = strlen($cadena);
        for($i=1; $i <= $longitudPass ; $i++){
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }


?>