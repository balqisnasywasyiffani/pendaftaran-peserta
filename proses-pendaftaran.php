<?php

include ("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {
    
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah = $_POST['pangkalan_asal'];

    // buat query
    $sql = "INSERT INTO calon_peserta (Nama, Alamat, Agama, Jenis_kelamin, Asal_sekolah) VALUE ('$nama', '$alamat', '$agama', '$jk', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        header('Location: index.php?status-sukses');
    } else {
        header('Location: index.php?status-gagal');
        die("Akses dilarang...");
    }
}

?>