<?php
    include 'db.php';
    
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM music_tb WHERE id_music = '".$_GET['id']."' ");
        echo '<script>window.location="music.php"</script>';
    }