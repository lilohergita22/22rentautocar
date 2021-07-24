
<?php

$id_transaksi = $_GET['id'];
{
$query = mysql_query("delete from transaksi where id_transaksi='$id_transaksi'");

}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=transaksi'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=transaksi'; </script>\n";}

?>
