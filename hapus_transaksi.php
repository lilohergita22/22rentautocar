<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi='$bk'");
	echo "<script>
					window.location='index2.php?module=transaksi';
				</script>";
 ?>