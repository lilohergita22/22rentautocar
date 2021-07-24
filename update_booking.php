<?php
session_start();
include "koneksi.php";
?>

<?php


    $sql_add=mysqli_query($conn, "INSERT INTO transaksi VALUES ('','$_POST[idcust]','$_POST[id]','$_POST[merk]',
    '$_POST[tahun]',
    '$_POST[harga]',
    '$_POST[tanggal_sewa]',
    '$_POST[lama_sewa]',
    '$_POST[total_harga]')");
	
?>
<script>alert ("Data Sukses Tersimpan")
						 window.location.href='index2.php?module=daftar_mobil2'</script>
