<?php
    include 'db.php';
    
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM foto_tb WHERE id_foto = '".$_GET['id']."' ");
        echo '<script>window.location="foto.php"</script>';
    }