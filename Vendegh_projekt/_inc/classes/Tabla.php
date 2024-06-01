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

    public function deletetab(){
        try{
            $data = array(
                'tabla_id' => $_POST['tabla_delete']
            );
            $query = "DELETE FROM tabla WHERE id = :tabla_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function update($id, $atribut, $hodnota){
        try{
            $check_query = "SELECT * FROM tabla WHERE id = :id";
            $check_stmt = $this->db->prepare($check_query);
            $check_stmt->execute(array(':id' => $id));
            if ($check_stmt->rowCount() > 0) {
                $data = array(
                    'id' => $id,
                    'atribut' => $atribut,
                    'hodnota' => $hodnota,
                    
                );
                $query = "UPDATE tabla SET atribut = :atribut, hodnota = :hodnota WHERE id = :id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
                echo "Nahravane";
            } else {
                echo "Invalid ID!";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

};
?>