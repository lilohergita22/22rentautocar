
<?php

$id_customer  	= $_GET['id'];



if ($foto=="")
{
$query = mysql_query("delete from tbl_customer where id_customer='$id_customer'");

} else {
$query = mysql_query("delete from tbl_customer where gambar='$foto'");
unlink("customer/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=customer'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=customer'; </script>\n";}

?>
