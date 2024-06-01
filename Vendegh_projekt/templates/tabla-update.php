<?php
include('partials/header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $atribut = $_POST['atribut'];
        $hodnota = $_POST['hodnota'];


        if (empty($id) || empty($atribut) || empty($hodnota)) {
            echo "All fields are required!";
        } else {
            $tabla = new Tabla();
            $tabla->update($id, $atribut, $hodnota);
        }
    }
}
?>

<body class="body p-2">
<div class="add_history"> 
    <div class="form-container"> 
        <h2>Update History</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="atribut">atribut:</label><br>
            <input type="text" id="atribut" name="atribut"><br>
            <label for="hodnota">hodnota:</label><br>
            <input type="text" id="hodnota" name="hodnota"><br>
            <input type="submit" name="update" value="Update">
        </form>
    </div>

</div>


</body>
</html>