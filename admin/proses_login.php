<?php
include("../koneksi.php");

$usr = $_POST['user'];
$psw = ($_POST['pass']);


$sql = "SELECT * FROM tbl_admin WHERE username='$usr' AND password='$psw'";
$res =  mysql_query($sql);
$data = mysql_fetch_array($res);
$n = mysql_num_rows($res);

if ($n == 1) {
    session_start();


    $_SESSION['usernameku'] = $usr;
    $_SESSION['passwordku'] = $psw;


    echo "<script language='javascript'>window.location = 'admin/index.php'</script>";
} else {
    echo "<script language='javascript'>alert('Username atau Password Salah !')</script>";
    echo "<script language='javascript'>window.location = 'index.php'</script>";
}
