<?php
@session_start();
?>


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
        <form enctype="multipart/form-data" method="post" action="update_booking.php">
          <table width="701" border="0">
            <?php

            include "koneksi.php";
            $id = $_GET['id'];
            $edit = mysqli_query($conn, "select * from tbl_mobil where id_mobil=$id");
            $c = mysqli_fetch_array($edit);
            ?>

            <tr>
              <td style="color:white"><small><strong>
                    <h4><b>FORM BOOKING </h4>
                    <h4><b>22 RENT AUTO CAR</h4>

                  </strong></small></td>
              <td>:</td>
              <td><input type="hidden" name="merk" value="<?php echo $c['merk']; ?>">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" name="idcust" value="<?php echo $_SESSION['id_customer']; ?>">
              </td>
            </tr>
            <tr>
              <td style="color:white"><small><strong></strong></small></td>
              <td>:</td>
              <td><input type="hidden" name="tahun" value="<?php echo $c['tahun']; ?>"></td>
            </tr>
            <tr>
              <td style="color:white"><small><strong></strong></small></td>
              <td>:</td>
              <td><input type="hidden" name="harga" value="<?php echo $c['harga']; ?>" id="harga"></td>
            </tr>
            <tr>
              <td style="color:white"><small><strong> Tanggal Booking</strong></small></td>
              <td>:</td>
              <td><input type="date" name="tanggal_sewa"></td>
            </tr>
            <tr>
              <td style="color:white"><small><strong>Lama Sewa</strong></small></td>
              <td>:</td>
              <td><input type="text" name="lama_sewa" id="lama_sewa"></td>
            </tr>
            <tr>
              <td style="color:white"><small><strong>Total Harga</strong></small></td>
              <td>:</td>
              <td><input type="text" name="total_harga" id="total_harga"></td>
            </tr>
            <br>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input class="btn btn-primary" type="submit" name="Submit" value="Submit"></td>
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