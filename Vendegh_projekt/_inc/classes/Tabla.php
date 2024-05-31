<?php
class Tabla extends Database {
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }



    public function selecttab(){
        try{
            $sql = "SELECT * FROM tabla";
            $query =  $this->db->query($sql);
            $tablak = $query->fetchAll();
            return $tablak;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

};
?>