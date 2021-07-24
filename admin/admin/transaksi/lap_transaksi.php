<body onLoad="window.print ()">


    <tr>
        <td colspan=8 color="#FFF000">
            <center>22 RENT AUTO CAR</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>LAPORAN TRANSAKSI RENTAL MOBIL 22 RENT AUTO CAR</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>Jl. Slamet Riyadi No. 790 Surakarta , Jawa Tengah</center>
        </td>
    </tr>
    <tr>
        <td colspan=8>
            <center>================================================================</center>
        </td>
    </tr>

    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor='magenta'>
            <th>No</th>
            <td>Nama Penyewa</td>
            <td>Merk</td>
            <td>Tahun</td>
            <td>Harga </td>
            <td>Tanggal Sewa</td>
            <td>Lama Sewa</td>
            <td>Total Harga</td>
        </tr>

        <?php
        include "../koneksi.php";
        $sql = mysql_query("SELECT * FROM transaksi ,tbl_customer where transaksi.id_customer=tbl_customer.id_customer
order by transaksi.id_transaksi");
        $no = 1;
        while ($row = mysql_fetch_array($sql)) {
        ?>
            <tr bgcolor='#FFF'>
                <td align='center'> <?php echo $no; ?> </td>
                <td> <?php echo $row['nama_lengkap']; ?></td>
                <td> <?php echo $row['merk']; ?></td>
                <td align='left'> <?php echo $row['tahun']; ?> </td>
                <td align='left'> <?php echo $row['harga']; ?> </td>
                <td align='left'> <?php echo $row['tanggal_sewa']; ?> </td>
                <td align='left'> <?php echo $row['lama_sewa']; ?> Hari</td>
                <td align='left'> Rp. <?php echo $row['total_harga']; ?> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
    <br>

    <table align="right">
        <tr>
            <td>
                ..........,<?php echo date('d - M - Y'); ?></td>
        </tr>
        <tr>
            <td> Ttd </td>
        </tr>
        <tr>
            <td> &nbsp; </td>
        </tr>
        <tr>
            <td> &nbsp; </td>
        </tr>
        <tr>
            <td> &nbsp; </td>
        </tr>
        <tr>
            <td>&nbsp; Pimpinan </td>
        </tr>

    </table>