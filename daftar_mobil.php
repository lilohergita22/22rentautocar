<?php include "koneksi.php"; ?>


<!-- /row -->
<br>
<br>
<!-- /row -->
<!-- /container -->



<div class="wrapper ">
	<div class="container">
		<div class="content">
			<div id="featured_slide ">


				<div style="color:white">

					<?php
					include "koneksi.php";

					$batas = 15;
					$paging = @$_GET['paging'];
					if (empty($paging)) {
						$posisi = 0;
						$paging = 1;
					} else {
						$posisi = ($paging - 1) * $batas;
					}
					$query = mysqli_query($conn, "select * from tbl_mobil order by id_mobil desc limit $posisi,$batas");
					while ($r = mysqli_fetch_array($query)) {
						echo "<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/mobil/foto/$r[gambar]' border=0 width=300 height=200> <br>
					 <strong><a href='?module=detail&id=$r[id_mobil]'>$r[merk]</a></strong>
					 <p><strong>$r[ulasan]</strong></p>
					<p> " . substr($r['ulasan'], 0, 9) . " .....<a href='?module=detail&id=$r[id_mobil]'>Lihat Selanjutnya Untuk Memesan</a> </p><br><br><br> </div>	 
					";
					}

					?>

				</div>

			</div>

		</div>

	</div>

</div>