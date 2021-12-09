<?php
// Program untuk mengkoneksikan SIMKes dengan database
$host = "localhost";
$username = "phpmyadmin";
$password = "inifgrup";
$db = "hpii_baru";
$koneksi = mysqli_connect($host, $username, $password, $db) or die("Koneksi Gagal");
//echo "Koneksi berhasil";
?>

<table bgcolor="#D9E8F3" align="center" width="100%" border="0" >
<tr bgcolor="#D9E8F3">
<td bgcolor="#D9E8F3" style="color:red">Nama</td>
<td bgcolor="#D9E8F3" style="color:yellow">Email</td>
<td bgcolor="#D9E8F3" style="color:green">HP</td>
<td bgcolor="#D9E8F3" style="color:blue">Instansi</td>
<td bgcolor="#D9E8F3" style="color:blue">Pekerjaan</td>
<td bgcolor="#D9E8F3" style="color:blue">Provinsi</td>
</tr>
<?php
$tampil = mysqli_query ($koneksi, "SELECT * FROM peserta");
while ($data = mysqli_fetch_array($tampil)){
?>
<tr bgcolor="#FFFFFF">
<td bgcolor="#FFFFFF"><?php echo $data['nama_peserta'];?></td>
<td bgcolor="#FFFFFF"><?php echo $data['email'];?></td>
<td bgcolor="#FFFFFF"><?php echo $data['no_hp'];?></td>
<td bgcolor="#FFFFFF"><?php echo $data['instansi'];?></td>
<td bgcolor="#FFFFFF"><?php echo $data['pekerjaan'];?></td>
<td bgcolor="#FFFFFF"><?php echo $data['provinsi'];?></td>
</tr>

<?php
}
?>
</table>