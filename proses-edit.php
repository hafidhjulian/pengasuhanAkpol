<?php
    include_once ("koneksi.php");
    $no_ak = $_POST['no_ak'];
    $jenis = $_POST['jenis'];
    $ket= $_POST['ket'];
    $poin = $_POST['poin'];
    $tanggal= date("Y-m-d h:i:s");
    $modal= mysqli_query($con,"UPDATE history SET jenis='$jenis',keterangan='$ket',poin='$poin',tanggal='$tanggal' WHERE no_ak='$no_ak'");
    header("location:index.php");

?>