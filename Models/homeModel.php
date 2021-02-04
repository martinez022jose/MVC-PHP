<?php
    class homeModel extends Mysql{
        public function __construct(){
             parent::__construct();
        }

        public function setUser(string $nombre,int $edad){
            $queryInsert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
            $arrData = array($nombre, $edad);
            $requestInsert = $this->insert($queryInsert,$arrData);
            return $requestInsert;
        }

        public function getUser($id){
            $query = "SELECT *FROM usuario WHERE id = $id";
            $request = $this->select($query);
            return $request;

        }

        public function updateUser(int $id, String $nombre, int $edad){
            $query = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id ";
            $arrData = array($nombre,$edad);
            $request = $this->update($query,$arrData);
            return $request;
        }

        public function getUsers(){
            $query = "SELECT * FROM usuario";
            $request = $this->select_all($query);
            return $request;
        }

        public function deleteUser($id){
            $query ="DELETE FROM usuario WHERE id = $id";
            $request = $this->delete($query);
            return $request;
        }
    }

?>