<?php
include "koneksi.php";
$query = mysqli_query($conn, "select * from tbl_mobil where id_mobil='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<br>
<div class="wrapper">
	<div class="row">
		<div class="col-md-3" style="margin:30px;">
			<img src="admin/admin/mobil/foto/<?php echo $data['gambar']; ?>" style="width:300px; height:250px;">
		</div>
		<div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
			<center style="color:White">
				<td><b>Detail Mobil</b></td>
			</center>
			<table>
				<tr>
					<h3>
						<td style="color:white"><b>Merk</b></td>
						<td style="color:white"> : <?php echo $data['merk']; ?></td>
					</h3>
				</tr>

				<tr>
					<h3>
						<td><b></b></td>
						<td style="color:white"> <?php echo $data['ulasan']; ?></td>
					</h3>
				</tr>

				<tr>
					<h3>
						<td style="color:white"><b>Tahun</b></td>
						<td style="color:white"> : <?php echo $data['tahun']; ?></td>
					</h3>
				</tr>

				<tr>
					<h3>
						<td style="color:white"><b>Harga</b></td>
						<td style="color:white"> : Rp. <?php echo $data['harga']; ?> / Hari </td>
					</h3>
				</tr>

			</table><br><br>

		</div>
	</div>