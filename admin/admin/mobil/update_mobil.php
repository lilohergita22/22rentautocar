<?php
include"config/fungsi_gambar.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
$tgl         =date('Y-m-d');
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE tbl_mobil SET 
									merk			= '$_POST[merk]',
                                    ulasan	 		= '$_POST[ulasan]',
                                    tahun				= '$_POST[tahun]',
                                    harga			 		= '$_POST[harga]',
                                    WHERE id_mobil		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE tbl_mobil SET 
									merk			= '$_POST[merk]',
                                    ulasan	 		= '$_POST[ulasan]',
                                    tahun				= '$_POST[tahun]',
                                    harga			 		= '$_POST[harga]',
                                    gambar		 		= '$nama_file'
                                    WHERE id_mobil		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=mobil'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=mobil'; </script>\n";
}
?>

