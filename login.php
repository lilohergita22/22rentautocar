<?php
include "koneksi.php";
?>

    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
<?php
error_reporting(0);
session_start();


if(@$_POST["login"]){ //jika tombol Login diklik
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	
	if($user!="" && $pass!=""){

		$em = mysqli_query($conn, "select * from tbl_customer where password = '$pass' AND username = '$user'");
		$data = mysqli_fetch_assoc($em);
		
		if($data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Login Anda Berhasil 
                  </div>";
				  $_SESSION["id_customer"]=$data["id_customer"];
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=$data["password"];
			$_SESSION["nama_lengkap"]=$data["nama_lengkap"];
			
			?>
			<script>alert ("Selamat Datang '<?php echo $_SESSION['nama_lengkap']; ?>'")
						 window.location.href='index2.php'</script>
						 exit;
		<?php
		}else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Mohon Ulangi Lagi !! Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}

}
?>
   <!-- PAGE CONTENT --> 
    <div class="container-fluid">
	<div class="col-md-6 col-md-offset-3">
	<div id="daftar">
    <div class="bg-dark text-white">
        <div id="login" class="tab-pane active">
            <center>
			<form action="" method="post" class="form-signin"><br>
				<input type="text" autofocus required name="user" placeholder="Username" class="form-control" /><br>
				<input type="hidden" name="level" value="members"><br>
				<input type="password" required name="pass" placeholder="Password" class="form-control" /><br><br>
				<input type="submit" name="login" value="Login" class="btn btn-primary"/>
					

				<td><a href="reset.php">Lupa Password</a></td>
            </form>
			</center>
			
        </div>
        </div>
		
    </div>


</div>

</blockquote>	
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    