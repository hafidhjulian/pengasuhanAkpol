<?php
    include_once ("koneksi.php");
    if (isset($_POST['simpan'])){
    $no_ak = $_POST['no_ak'];
    $jenis = $_POST['jenis'];
    $ket= $_POST['ket'];
    $poin = $_POST['poin'];
    $tanggal= date("Y-m-d h:i:s");
    $nilai_sebelum=$_POST['nilai_sebelum'];
    $na=$_POST['poin'];
    if($jenis=='Reward'){
        $na=$nilai_sebelum + $poin;
      }else{
        $na=$nilai_sebelum - $poin;
      }
    $modal= mysqli_query($con,"INSERT INTO history (no_ak, jenis, keterangan, poin, nilai_akhir, tanggal) VALUES ('$no_ak', '$jenis', '$ket', '$poin', '$na', '$tanggal')");
    header("location:index.php");
    
      $query= mysqli_query($con,"UPDATE data_taruna SET nsp='$na' WHERE no_ak='$no_ak'");
    }
?>