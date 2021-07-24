
<?php

$id_berita  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from tbl_mobil where id_mobil='$id_mobil'");

} else {
$query = mysql_query("delete from tbl_mobil where gambar='$foto'");
unlink("mobil/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=mobil'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=mobil'; </script>\n";}


?>
