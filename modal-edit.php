<?php
    include_once "koneksi.php";
	$no_ak=$_GET['no_ak'];
	$modal=mysqli_query($con,"SELECT * FROM data_taruna WHERE no_ak='$no_ak'");
	while($dat=mysqli_fetch_array($modal)){
?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="proses-edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="no_ak"  class="form-control" value="<?php echo $dat['no_ak']; ?>" />
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="re" name="jenis" value="Reward" required>Reward</label><br>
                        <label><input type="radio" id="pu" name="jenis" value="Punishment" required>Punishment</label>
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket">
                    </div>
                    <div class="form-group">
                        <label for="poin" id="labelPoin">Poin</label>
                        <input type="text" class="form-control" id="poin" name="poin">
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">UPLOAD</button>                            
                </form>
            </div>
        </div>

    </div>


<?php };?>

<script>
$("input[name='optradio']").click(function() {
      //$('.radio-default label').text('Set default');
      
      if((this).id!="pu"){
        document.getElementById('labelPoin').innerHTML = 'Penambahan Poin';
        document.getElementById("labelPoin").style.color = "green";
        document.getElementById("poin").style.color = "green";
        
      }else{
        document.getElementById('labelPoin').innerHTML = 'Pengurangan Poin';
        document.getElementById("labelPoin").style.color = "red";
        document.getElementById("poin").style.color = "red";
      }
 });

</script>