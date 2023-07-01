<?php
    include 'db.php';
    
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM video_tb WHERE id_video = '".$_GET['id']."' ");
        echo '<script>window.location="video.php"</script>';
    }