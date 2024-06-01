<?php
include('partials/header.php');

?>
<body class="body p-3">
    <br>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">

                <?php
                    if($_SESSION['is_admin']==1){
                        echo "<h1>Admin</h1>";

                        include('partials/tablaupdate.php');
                    }

                ?>

            </div>
        </div>
    </section> 
</main>
</body>

<?php
    include('partials/footer.php');
?>