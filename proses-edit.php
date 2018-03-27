<?php
    include_once ("koneksi.php");
    if(isset($_POST['simpan'])){    
	$no_ak = $_POST['no_ak'];
	$jenis = $_POST['jenis'];
    $ket = $_POST['ket'];
    $poin = $_POST['poin'];
    $tanggal= date("Y-m-d h:i:s");

    $modal=mysqli_query($con,"INSERT INTO history (no_ak, jenis, keterangan, poin, tanggal) VALUES ('$no_ak', '$jenis', '$ket', '$poin', '$tanggal')");

    if( $modal ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
    
}
?>