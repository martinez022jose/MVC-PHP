<?php
    class Mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrvalues;

        public function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function insert(string $query, array $arrval){
            $this->strquery = $query;
            $this->arrvalues = $arrval;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrvalues);
            
            if($resInsert){
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }

            return $lastInsert;

        }

        public function select(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function select_all(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        public function update(string $query,array  $arrValues){
            $this->strquery = $query;
            $this->arrvalues = $arrValues;
            $update = $this->conexion->prepare($this->strquery);
            $resUpdate = $update->execute($this->arrvalues);
            return $resUpdate;
        }

        public function delete(string $query){
            $this->strquery = $query;
            $delete = $this->conexion->prepare($this->strquery);
            $delete->execute();
            return $delete;
        }
    }



?>