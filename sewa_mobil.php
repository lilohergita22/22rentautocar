<?php 

include "koneksi.php"; 

?> 
 <td width="753" height="250" align="left" bgcolor="#ff0000"><div align="center" style="color:white">DATA TRANSAKSI
		
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
            <p>
              <?php


$query = "select * from transaksi
order by id_transaksi ";
$sql = mysqli_query($conn, $query);

?>
            <table class="table table-striped table-bordered">
              <tr bgcolor="#B0B0B0">
                <th><small>NO</small></th>
                <th><small>Merk</small></th>
                <th><small>Tahun</small></th>
                <th><small>Harga</small></th>
                <th><small>Tanggal Sewa</small></th>
                <th><small>Lama Sewa</small></th>
                <th><small>Total Harga</small></th>
              </tr>
              <?php
$no=1;
while ($data=mysqli_fetch_array($sql))
{
?>
              <tr bgcolor="#E4E4E4">
                <td><small><?php echo $no?></small></td>
                <td><small><?php echo $data['merk']; ?></small></td>
                <td><small><?php echo $data['tahun']; ?></small></td>
                <td><small><?php echo $data['harga']; ?></small></td>
                <td><small><?php echo $data['tanggal_sewa']; ?></small></td>
                <td><small><?php echo $data['lama_sewa']; ?></small></td>
                <td><small><?php echo $data['total_harga']; ?></small></td>
              </tr>
              <?php
$no++;
}
?>
            </table>
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
    