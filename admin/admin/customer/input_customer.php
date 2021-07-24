
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">INPUT  CUSTOMER
        </div>
        <table width="755" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><form action="?page=proses_customer" method="post" enctype="multipart/form-data">
        <table width="383" border="0">

		  <tr>
            <td><small><strong>Username</strong></small></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
          </tr>
		  <tr>
            <td><small><strong>Password</strong></small></td>
            <td>:</td>
            <td><input type="text" name="password"></td>
          </tr>
          <tr>
            <td><small><strong>No KTP</strong></small></td>
            <td>:</td>
            <td><input type="text" name="no_ktp"></td>
          </tr>
		  <tr>
            <td><small><strong>Nama Lengkap</strong></small></td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
          </tr>
		  <tr>
            <td><small><strong>Tanggal Lahir</strong></small></td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
          </tr>
		  <tr>
            <td><small><strong>Jenis Kelamin</strong></small></td>
            <td>:</td>
            <td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select></td>
          </tr>
          <tr>
            <td><small><strong>Alamat</strong></small></td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
          </tr>
		  <tr>
            <td><small><strong>Agama</strong></small></td>
            <td>:</td>
            <td><select name="agama"  class="texbox" value="<?php $_POST['agama']?>>
			<option value="pilih">--Pilih--</option>
			<option value="pilih">--Pilih--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			</select></td>
          </tr>
		  <tr>
            <td><small><strong>No Telpon</strong></small></td>
            <td>:</td>
            <td><input type="text" name="no_telpon"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
          </form></p>
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
    