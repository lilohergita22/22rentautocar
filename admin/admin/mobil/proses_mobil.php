
<?php

include"config/fungsi_gambar.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$merk		= $_POST['merk'];
$ulasan		= $_POST['ulasan'];
$tahun			= $_POST['tahun'];
$harga			= $_POST['harga'];
$gambar		= $_POST['gambar'];


if (empty ($merk) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_mobil'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysql_query ('insert into tbl_mobil (no,merk,ulasan,tahun,harga,gambar,)values("'.$no.'"
		,"'.$merk.'"
		,"'.$ulasan.'"
		,"'.$tahun.'"
		,"'.$harga.'"
		,"'.$gambar.'");
		} else {
		$query=mysql_query('insert into tbl_mobil (merk,ulasan,tahun,harga,gambar,)values("'.$merk.'"
		,"'.$ulasan.'"
		,"'.$tahun.'"
		,"'.$harga.'"
		,"'.$gambar.'");
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=mobil'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=mobil'; </script>\n";
}
?>