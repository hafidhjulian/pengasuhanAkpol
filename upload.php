<?php
include_once 'koneksi.php';
if(isset($_POST['simpan']))
{    
	$poin=$_POST['poin'];
	$nsp=$_POST['poin'];
	$ket=$_POST['ket'];
	$tanggal= date("Y-m-d h:i:s");
	$nilai_sebelum=$_POST['nilai_sebelum'];
	$jenis=$_POST['optradio'];
	$no_ak=$_POST['no_ak'];


	// if($jenis==1){
	// 	$nsp=$nilai_sebelum + $poin;
	// }else{
	// 	$nsp=$nilai_sebelum - $poin;
	// }
	//   $nsp=round($nsp,2);

		
			$query = mysqli_query($con, "UPDATE history SET
				jenis='$jenis', 
				keterangan='$ket',
				poin='$poin', 
				tanggal='$tanggal' WHERE no_ak='$no_ak'");

				if( $query ) {
					// kalau berhasil alihkan ke halaman index.php dengan status=sukses
					header('Location: index.php?status=sukses');
				} else {
					// kalau gagal alihkan ke halaman indek.php dengan status=gagal
					header('Location: index.php?status=gagal');
				}

	
			}
	
?>