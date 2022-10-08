<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($nama)) {
        echo "<script>alert('nama mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } elseif (empty($nim)) {
        echo "<script>alert('nim mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>"; 

    }else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama,nim,alamat,username,password)
        value ('".$nama."','".$nim."','".$alamat."','".$username."','".$password."')") or die(mysqli_error($koneksi));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data mahasiswa');location.href='proses_tambah_mhs.php'</script>";
        }
    }
}
?>
