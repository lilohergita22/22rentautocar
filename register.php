<?php
include "koneksi.php";
?>

    
    <!-- MAIN -->
<?php

if (@$_POST['act']=="add"){
    $sql_add=mysqli_query($conn, "INSERT INTO tbl_customer (username,password,no_ktp,nama_lengkap,tanggal_lahir,jenis_kelamin,alamat,agama,no_telpon) VALUES ("
    ."'".$_POST['username']."',
    '".$_POST['password']."',
    '".$_POST['no_ktp']."',
    '".$_POST['nama_lengkap']."',
    '".$_POST['tanggal_lahir']."',
    '".$_POST['jenis_kelamin']."',
    '".$_POST['alamat']."',
    '".$_POST['agama']."',
    '".$_POST['no_telpon']."') ");
    echo'<script>alert("Data Berhasil Disimpan");window.location ="?module=register";</script>';
}
?>
<div id="daftar" style=" border: 1px solid black;">
<div class="bg-dark text-white">
<p align="center" style="color:white">&raquo;FORM PENDAFTARAN&laquo;</p>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<tr><td class="col-md-6" style="color:white">Username</td> <td><input name="username" size="25"  class="form-control"></td></tr>
<tr><td class="col-md-6" style="color:white">Password</td> <td><input name="password" type="password" size="25"  class="form-control"></td></tr>
<tr><td class="col-md-6" style="color:white">No KTP</td> <td><input name="no_ktp" size="25"  class="form-control"></td></tr>
<tr><td class="col-md-6" style="color:white">Nama Lengkap</td> <td><input name="nama_lengkap" size="25"  class="form-control"></td></tr>
<tr><td class="col-md-6" style="color:white">Tanggal Lahir</td> <td><input name="tanggal_lahir" size="25" class="texbox" type="date"></td></tr>
<tr><td class="col-md-6" style="color:white">Jenis Kelamin</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td class="col-md-6" style="color:white">Alamat</td> <td><textarea name="alamat"  cols="25" rows="3"  class="form-control"></textarea></td></tr>
<tr><td class="col-md-6" style="color:white">Agama</td> <td><select name="agama"  class="texbox" value="<?php $_POST['agama']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="Islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="buddha">Buddha</option>
</select></td></tr>
<tr><td class="col-md-6" style="color:white">No Telepon</td> <td><input name="no_telpon"  size="25"  class="form-control"></td></tr>


<tr><td class="col-md-6"><input type="submit" value="Simpan" class="btn btn-primary">
    <input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</div>
</div>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
   