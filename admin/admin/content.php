<?php
  @$page = $_GET['page'];

  if ($page == "home") {
    include "home.php";
	
  }elseif ($page == "mobil") {
    include "mobil/mobil.php";
  }elseif ($page == "edit_mobil") {
    include "mobil/edit_mobil.php";
  }elseif ($page == "proses_mobil") {
    include "mobil/proses_mobil.php";
  }elseif ($page == "input_mobil") {
    include "mobil/input_mobil.php";
  }elseif ($page == "update_mobil") {
    include "mobil/update_mobil.php";
  }elseif ($page == "hapus_mobil") {
    include "mobil/hapus_mobil.php";
	
  }elseif ($page == "customer") {
    include "customer/customer.php";
  }elseif ($page == "edit_customer") {
    include "customer/edit_customer.php";
  }elseif ($page == "proses_customer") {
    include "customer/proses_customer.php";
  }elseif ($page == "input_customer") {
    include "customer/input_customer.php";
  }elseif ($page == "update_customer") {
    include "customer/update_customer.php";
  }elseif ($page == "hapus_customer") {
    include "customer/hapus_customer.php";
	
	
  }elseif ($page == "transaksi") {
    include "transaksi/transaksi.php";
  }elseif ($page == "lap_transaksi") {
    include "transaksi/lap_transaksi.php";
  }elseif ($page == "hapus_transaksi") {
    include "transaksi/hapus_transaksi.php";
	
	
  }elseif ($page == "agenda") {
    include "agenda/agenda.php";
  }elseif ($page == "edit_agenda") {
    include "agenda/edit_agenda.php";
  }elseif ($page == "proses_agenda") {
    include "agenda/proses_agenda.php";
  }elseif ($page == "input_agenda") {
    include "agenda/input_agenda.php";
  }elseif ($page == "update_agenda") {
    include "agenda/update_agenda.php";
  }elseif ($page == "hapus_agenda") {
    include "agenda/hapus_agenda.php";
	
  }else {
    include "home.php";
  }

?>
