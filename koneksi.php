<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_gambar");

if (mysqli_connect_errno()) {
          echo "koneksi gagal : " . mysqli_connect_errno();
}else {
          echo "koneksi berhasil";
}

if (isset($_POST['proses'])) {
          $direktori = $_POST['berkas/'];
          $file_name = $_FILES['nama'] ['name'];
          move_uploaded_file($_FILES[])
}
?>
