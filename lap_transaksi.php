<body onload="window.print ()">


    <tr>
        <td colspan=8 color="#FFF000">
            <center>22 RENT AUTO CAR</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>LAPORAN DATA TRANSAKSI RENTAL MOBIL 22 RENT AUTO CAR</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>Jl. Slamet Riyadi NO 790 , Surakarta , Jawa Tengah</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>===============================================================</center>
        </td>
    </tr>

    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor='magenta'>
            <th>No</th>
            <td>Merk</td>
            <td>Tahun</td>
            <td>Harga </td>
            <td>Tanggal Sewa</td>
            <td>Lama Sewa</td>
            <td>Total Harga</td>
        </tr>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($conn, "SELECT * FROM transaksi where id_transaksi='$_GET[id]'");
        $no = 1;
        $row = mysqli_fetch_array($sql);
        ?>
        <tr bgcolor='#FFF'>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['merk']; ?></td>
            <td align='left'> <?php echo $row['tahun']; ?> </td>
            <td align='left'> <?php echo $row['harga']; ?> </td>
            <td align='left'> <?php echo $row['tanggal_sewa']; ?> </td>
            <td align='left'> <?php echo $row['lama_sewa']; ?> Hari</td>
            <td align='left'> Rp. <?php echo $row['total_harga']; ?> </td>
        </tr>

    </table>
    <br>
    <br>
    <table>
        <td>
            <tr>Surakarta , <?php echo date('d - M - Y'); ?></tr><br>
            <tr> Ttd </tr><br>
            <tr> </tr><br>
            <tr> </tr><br>
            <tr> </tr><br>
            <tr> Admin </tr>
        </td>
    </table>