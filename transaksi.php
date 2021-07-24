<?php
include "koneksi.php";
?>

<td width="500" height="250" align="left">
  <div align="center" style="color:white">DATA TRANSAKSI
  </div>

  <tr>
    <td>&nbsp;</td>
    <td>
      <p>
        <?php


        $query = "select * from transaksi where id_customer='$_SESSION[id_customer]' ";
        $sql = mysqli_query($conn, $query);

        ?>

        <table class="table table-striped table-bordered">
          <tr bgcolor="#B0B0B0">
            <th>NO</th>
            <th>Merk</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Tanggal Sewa</th>
            <th>Lama Sewa</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          while ($data = mysqli_fetch_array($sql)) {
          ?>
            <tr bgcolor="#E4E4E4">
              <td><?php echo $no ?></td>
              <td><?php echo $data['merk']; ?></td>
              <td><?php echo $data['tahun']; ?></td>
              <td><?php echo $data['harga']; ?></td>
              <td><?php echo $data['tanggal_sewa']; ?></td>
              <td><?php echo $data['lama_sewa']; ?></td>
              <td><?php echo $data['total_harga']; ?></td>
              <td><a href="hapus_transaksi.php?id=<?php echo $data['id_transaksi']; ?>" onClick="return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_transaksi']; ?>?')"> Hapus </a> | <a href="lap_transaksi.php?id=<?php echo $data['id_transaksi']; ?>" target="_blank">Cetak</a> </td>
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
</td>
</tr>