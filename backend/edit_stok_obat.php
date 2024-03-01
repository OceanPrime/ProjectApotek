<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'apotek';

$db_connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(isset($_POST['Simpan'])) {

    $nama = $_POST['Nama_Obat'];
    $jenis =$_POST['Jenis'];
    $stok =  $_POST['Stok'];
    $expired = $_POST['Expired'];
    $satuan = $_POST['Satuan'];
    $harga_satuan =  $_POST['Harga_Satuan'];

    // Validasi data (sesuaikan dengan kebutuhan Anda)

    // Lakukan operasi SQL untuk menambahkan stok obat
    $query = mysqli_query($db_connect,"insert into tbl_stok_obat (Nama_Obat, Jenis, Stok, Expired, Satuan, Harga_Satuan) values('$nama','$jenis','$stok','$expired','$satuan','$harga_satuan')");

    if($query) {
        header("Location:../pages/stok_obat.php");
        
    } else {
        echo("gagal");
    }
}
