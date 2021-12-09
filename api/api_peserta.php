<?php
// Program untuk mengkoneksikan SIMKes dengan database
$host = "localhost";
$username = "phpmyadmin";
$password = "inifgrup";
$db = "hpii_baru";
$koneksi = mysqli_connect($host, $username, $password, $db) or die("Koneksi Gagal");

$data = json_decode(file_get_contents('php://input'), true);

$a = 3;
$b = "Webinar Nasional HPII";
$c = $data['nama_peserta'];
$to = $data['email'];
$e = $data['no_hp'];
$f = $data['instansi'];
$g = $data['pekerjaan'];
$h = $data['provinsi'];
$i = $data['remark'];

header('Content-Type: application/json');
$simpan = mysqli_query($koneksi, "INSERT INTO peserta (id_agenda,nama_agenda,nama_peserta,email,no_hp,instansi,pekerjaan,provinsi,remark)  
			VALUE('$a','$b','$c','$to','$e','$f','$g','$h','$i')");

    if($simpan){
        $simpan = "Pendaftaran berhasil disimpan.";
        echo json_encode($simpan, true);
    } else{
        $simpan = "Pendaftaran gagal disimpan.";
        echo json_encode($simpan, false);
        exit();
    }


?>