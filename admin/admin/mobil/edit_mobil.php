<td width="753" height="250" align="left" bgcolor="#FFFFFF">
  <div align="center">EDIT MOBIL
  </div>
  <table width="755" border="0">
    <tr>
      <td width="27">&nbsp;</td>
      <td width="702">&nbsp;</td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <p align="left">
          <form enctype="multipart/form-data" method="post" action="?page=update_mobil&id=<?php echo $_GET['id'] ?>">
            <table width="701" border="0">
              <?php

              $id = $_GET[id];
              $edit    = "select * from tbl_mobil where id_mobil=$id";
              $hasil  = mysql_query($edit);
              $c    = mysql_fetch_array($hasil);

              ?>

              <tr>
                <td><small><strong>Merk</strong></small></td>
                <td>:</td>
                <td><input type="text" name="merk" value="<?php echo $c['merk']; ?>"></td>
              </tr>
              <tr>
                <td><small><strong>Ulasan </strong></small></td>
                <td>:</td>
                <td><textarea name="ulasan" cols="70" rows="10" id="ulasan" value="<?php echo $c['ulasan']; ?>"></textarea></td>
              </tr>
              <tr>
                <td><small><strong>Tahun</strong></small></td>
                <td>:</td>
                <td><input type="text" name="tahun" value="<?php echo $c['tahun']; ?>"></td>
              </tr>
              <tr>
                <td><small><strong>Harga</strong></small></td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $c['harga']; ?>"></td>
              </tr>
              <tr>
                <td><small><strong>Gambar</strong></small></td>
                <td>:</td>
                <td><input type="file" name="fupload" id="nama_file">
                  <input type="text" name="fupload1" id="nama_file" value="<?php echo $c['gambar']; ?>">
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit"></td>
              </tr>
            </table>
          </form>
          <p></p>
          <p></p>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</td>
</tr>