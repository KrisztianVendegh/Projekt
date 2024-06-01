<h2>History</h2>
<?php
    $tabla1 = new Tabla();
    $tabla = $tabla1->selecttab();
    if(isset($_POST['tabla_delete'])){
        $tabla_id = $_POST['tabla_delete'];
        $tabla1->deletetab($tabla_id);
        header('Location: admin.php');
        exit();
    }

    echo '<table>';
    echo '<tr><th>id</th>
                <th>Atribut</th>
                <th>Hodnota</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>';
    foreach($tabla as $t){
 
        echo '<tr>';
        echo '<td>'.$t->id;'</td>';
        echo '<td>'.$t->atribut;'</td>';
        echo '<td>'.$t->hodnota;'</td>';
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="tabla_delete" value="'.$t->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        echo '<td>
                <form action="tabla-update.php" method="POST">
                    <button type="submit" name="edit_history" value="'.$t->id.'"'.'>Editovať</button>
                </form>
             </td>';
        echo '</tr>';
    }

    echo '</table>';
?>