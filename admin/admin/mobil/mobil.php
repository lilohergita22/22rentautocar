      <td width="753" height="250" align="left" bgcolor="#afeeee">
        <div align="center">DAFTAR MOBIL
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <p>
              <?php


              $query = "select * from tbl_mobil
order by id_mobil ";
              $sql = mysql_query($query);

              ?>
              <table border="1">
                <tr bgcolor="#B0B0B0">
                  <th><small>NO</small></th>
                  <th><small>Merk</small></th>
                  <th><small>Ulasan</small></th>
                  <th><small>Tahun </small></th>
                  <th><small>Harga</small></th>
                  <th><small>Gambar</small></th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysql_fetch_array($sql)) {
                ?>
                  <tr bgcolor="#E4E4E4">
                    <td><small><?php echo $no ?></small></td>
                    <td><small><?php echo $data['merk']; ?></small></td>
                    <td><small><?php echo $data['ulasan']; ?></small></td>
                    <td><small><?php echo $data['tahun']; ?></small></td>
                    <td><small><?php echo $data['harga']; ?></small></td>
                    <td><small><img src="mobil/foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                  </tr>
                <?php
                  $no++;
                }
                ?>
              </table>
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