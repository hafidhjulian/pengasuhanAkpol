<?php
include_once 'koneksi.php';
if(isset($_POST['simpan']))
{    
	$nsp=$_POST['poin'];
	$nsp=$_POST['poin'];


	if($optradio==1){
		$nsp=$nilai_sebelum + $poin;
	  }else{
		$nsp=$nilai_sebelum - $poin;
	  }
	
	  $nsp=round($nsp,2);
	
	
	
	
	
}
?>