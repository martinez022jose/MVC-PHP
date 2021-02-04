<?php
    class Productos extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function Productos($params){

            $data['page_id'] = 2;
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "Productos";
           
            $this->views->getView($this,"productos",$data);
        }
    }
?>