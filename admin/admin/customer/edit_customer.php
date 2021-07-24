 
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">EDIT CUSTOMER
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="?page=update_customer&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php

$id = $_GET[id];
$edit		= "select * from tbl_customer where id_customer=$id";
  $hasil	= mysql_query ($edit);
  $c		= mysql_fetch_array ($hasil);

?>

					<tr>
                      <td><small><strong>Username</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="username" value="<?php echo $c['username']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Password</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="password" value="<?php echo $c['password']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>No KTP</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="no_ktp" value="<?php echo $c['no_ktp']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Nama Lengkap</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="nama_lengkap" value="<?php echo $c['nama_lengkap']; ?>"></td>
                    </tr>  
					<tr>
                      <td><small><strong>Tanggal Lahir</strong></small></td>
                      <td>:</td>
                      <td><input type="date" name="tanggal_lahir" value="<?php echo $c['tanggal_lahir']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Jenis Kelamin</strong></small></td>
                      <td>:</td>
                <td><select name="jenis_kelamin" class="form-control">
					<?php
						if($c['jenis_kelamin']=='Laki-laki'){
					?>
					<option value="Laki-laki" selected>Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
					<?php }else{ ?>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan" selected>Perempuan</option>
					<?php } ?>
				</select></td>
                    </tr>
                    <tr>
                      <td><small><strong>Alamat</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="alamat" value="<?php echo $c['alamat']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Agama</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="agama" value="<?php echo $c['agama']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>No Telpon</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="no_telpon" value="<?php echo $c['no_telpon']; ?>"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
                <p></p>
                <p></p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    