<?php 
$conn = mysqli_connect("sql108.infinityfree.com", "if0_34376315", "3IVBSIouewtmwU","if0_34376315_jemjemcit");

// $result = $conn->query("SELECT id_foto FROM foto_tb ORDER BY id_foto DESC LIMIT 1");
// $lastId = "";
// while ($row = mysqli_fetch_assoc($result)) {
//     $lastId = $row["id_foto"];
// }
// $pieces = explode("-", $lastId);
// $id = (int)$pieces[1] + 1;
// $newId = "P-" . str_pad((string)$id, 1, "0", STR_PAD_LEFT);

// function query($query){
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }


function test_input($dataIn){
    $dataIn = trim($dataIn);
    $dataIn = stripslashes($dataIn);
    $dataIn = htmlspecialchars($dataIn);
    return $dataIn;
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["insertFoto"])) {

        function upload()
        {
            $namaFile = $_FILES['fileToUpload']['name'];
            $error = $_FILES['fileToUpload']['error'];
            $tempName = $_FILES['fileToUpload']['tmp_name'];

            // sudah pilih file
            if (
                $error === 4
            ) {
                echo "<script>
                alert('Mohon masukan gambar!!!')
                </script>";
            }

            // validasi gambar
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (
                !in_array($ekstensiGambar, $ekstensiGambarValid)
            ) {
                echo "<script>
                alert('Mohon masukan gambar sesuai tipe yang ditentukan!!!')
            </script>";
                return false;
            }

            // pindah gambar
            move_uploaded_file($tempName, 'assets/img/' . $namaFile);

            return $namaFile;
        }

        $fileToUpload = upload();
        if (!$fileToUpload) {
            return false;
        }

        $nama = test_input($_POST["nama"]);
        $deskripsi = test_input($_POST["deskripsi"]);
        $conn->query("INSERT INTO `foto_tb` (`id_foto`, `nama_foto`, `deskripsi_foto`, `foto`) VALUES ('$newId', '$nama', '$deskripsi', '$fileToUpload');");
        header("location:foto.php");

        return header("location:foto.php");
    }
}

    if (isset($_POST["insertVideo"])) {

        function upload()
        {
            $namaFile = $_FILES['fileToUpload']['name'];
            $error = $_FILES['fileToUpload']['error'];
            $tempName = $_FILES['fileToUpload']['tmp_name'];

            // sudah pilih file
            if (
                $error === 4
            ) {
                echo "<script>
                alert('Mohon masukan gambar!!!')
                </script>";
            }

            // validasi gambar
            $ekstensiGambarValid = ['mp4', 'avi', 'm4v'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (
                !in_array($ekstensiGambar, $ekstensiGambarValid)
            ) {
                echo "<script>
                alert('Mohon masukan gambar sesuai tipe yang ditentukan!!!')
            </script>";
                return false;
            }

            // pindah gambar
            move_uploaded_file($tempName, 'assets/vid/' . $namaFile);

            return $namaFile;
        }

        $fileToUpload = upload();
        if (!$fileToUpload) {
            return false;
        }

        $nama = test_input($_POST["nama"]);
        $deskripsi = test_input($_POST["deskripsi"]);
        $conn->query("INSERT INTO `video_tb` (`id_video`, `nama_video`, `deskripsi_video`, `video`) VALUES (NULL, '$nama', '$deskripsi', '$fileToUpload');");
        header("location:video.php");

        return header("location:video.php");
    }

    if (isset($_POST["insertMusic"])) {

        function upload()
        {
            $namaFile = $_FILES['fileToUpload']['name'];
            $error = $_FILES['fileToUpload']['error'];
            $tempName = $_FILES['fileToUpload']['tmp_name'];

            // sudah pilih file
            if (
                $error === 4
            ) {
                echo "<script>
                alert('Mohon masukan gambar!!!')
                </script>";
            }

            // validasi gambar
            $ekstensiGambarValid = ['mp3', 'wav'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (
                !in_array($ekstensiGambar, $ekstensiGambarValid)
            ) {
                echo "<script>
                alert('Mohon masukan gambar sesuai tipe yang ditentukan!!!')
            </script>";
                return false;
            }

            // pindah gambar
            move_uploaded_file($tempName, 'assets/music/' . $namaFile);

            return $namaFile;
        }

        $fileToUpload = upload();
        if (!$fileToUpload) {
            return false;
        }

        $nama = test_input($_POST["nama"]);
        $deskripsi = test_input($_POST["deskripsi"]);
        $conn->query("INSERT INTO `music_tb` (`id_music`, `nama_music`, `deskripsi_music`, `music`) VALUES (NULL, '$nama', '$deskripsi', '$fileToUpload');");
        header("location:music.php");

        return header("location:music.php");
    }
?>