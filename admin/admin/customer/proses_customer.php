
<?php

$username			= $_POST['username'];
$password			= $_POST['password'];
$no_ktp				= $_POST['no_ktp'];
$nama_lengkap		= $_POST['nama_lengkap'];
$tanggal_lahir		= $_POST['tanggal_lahir'];
$jenis_kelamin		= $_POST['jenis_kelamin'];
$alamat				= $_POST['alamat'];
$agama				= $_POST['agama'];
$no_telpon			= $_POST['no_telpon'];


if (empty ($username) or empty($password) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_customer'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysql_query ('insert into tbl_customer (username,password,no_ktp,nama_lengkap,tanggal_lahir,jenis_kelamin,alamat,agama,no_telpon)values("'.$username.'"
		,"'.$password.'"
		,"'.$no_ktp.'"
		,"'.$nama_lengkap.'"
		,"'.$tanggal_lahir.'"
		,"'.$jenis_kelamin.'"
		,"'.$alamat.'"
		,"'.$agama.'"
		,"'.$no_telpon.'")');
		} else {
		$query=mysql_query('insert into tbl_customer (username,password,no_ktp,nama_lengkap,tanggal_lahir,jenis_kelamin,alamat,agama,no_telpon)values("'.$username.'"
		,"'.$password.'"
		,"'.$no_ktp.'"
		,"'.$nama_lengkap.'"
		,"'.$tanggal_lahir.'"
		,"'.$jenis_kelamin.'"
		,"'.$alamat.'"
		,"'.$agama.'"
		,"'.$no_telpon.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=customer'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=customer'; </script>\n";
}
?>