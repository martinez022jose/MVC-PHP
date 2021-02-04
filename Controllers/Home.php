<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home($params){

            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Chiques sadasdasdada";
            $this->views->getView($this,"home",$data);
        }

        public function insertarUser(){
            $data = $this->model->setUser("Carlos",22);
            print_r($data);
        }

        public function getUsuario($id){
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function update(){
            $data = $this->model->updateUser(1,"roberto",20);
            print_r($data);
        }

        public function getUsers(){
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function deleteUser($id){
            $data = $this->model->deleteUser($id);
            print_r($data);
        }
    }
?>