<td width="753" height="250" align="left" bgcolor="#afeeee">
  <div align="center">DAFTAR CUSTOMER
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
        <p align="left"><a href="?page=input_customer">
            <h3>+ Tambah Customer </h3>
          </a></p>
        <p>
          <?php


          $query = "select * from tbl_customer
order by id_customer ";
          $sql = mysql_query($query);

          ?>
          <table border="1">
            <tr bgcolor="aqua">
              <th><small>NO</small></th>
              <th><small>Username</small></th>
              <th><small>Password</small></th>
              <th><small>No Ktp</small></th>
              <th><small>Nama Lengkap</small></th>
              <th><small>Tanggal Lahir</small></th>
              <th><small>Jenis Kelamin</small></th>
              <th><small>Alamat</small></th>
              <th><small>Agama</small></th>
              <th><small>No Telpon</small></th>
              <th><small>AKSI</small></th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysql_fetch_array($sql)) {
            ?>
              <tr bgcolor="#E4E4E4">
                <td><small><?php echo $no ?></small></td>
                <td><small><?php echo $data['username']; ?></small></td>
                <td><small><?php echo $data['password']; ?></small></td>
                <td><small><?php echo $data['no_ktp']; ?></small></td>
                <td><small><?php echo $data['nama_lengkap']; ?></small></td>
                <td><small><?php echo $data['tanggal_lahir']; ?></small></td>
                <td><small><?php echo $data['jenis_kelamin']; ?></small></td>
                <td><small><?php echo $data['alamat']; ?></small></td>
                <td><small><?php echo $data['agama']; ?></small></td>
                <td><small><?php echo $data['no_telpon']; ?></small></td>
                <td><small><a href="?page=hapus_customer&id=<?php echo $data['id_customer']; ?>" onClick="return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_customer']; ?>?')"> Hapus </a>
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