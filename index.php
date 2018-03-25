<?php
include_once("koneksi.php");
$qry= mysqli_query($con,"SELECT * FROM data_taruna");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pengasuhan Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	</head>
	<body>
        <div class="container-fluid">
                <div class="row sidnav">                
                    <div class="col-md-4 text-center" id="sidenav">
                        <nav class="navbar navbar-expand-md flex-column">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="beranda">
                                <ul class="nav flex-column">
                                    <li class="nav-item top">
                                        <span class="fa-stack fa-lg doc">
                                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                <i class="fa fa-file-text fa-stack-1x"></i>
                                        </span>
                                        <h1 class="display-4 textdoc">Pengasuhan</h1>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#myFiles">
                                            <span class="fa-lg">
                                                <p><i class="fa fa-history">  History</i></p>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tar">
                                            <span class="fa-lg">
                                                <p><i class="fa fa-file-text"> Taruna/Taruni</i></p>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active container" id="myFiles">
                                <h1 class="display-4">History</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group" id="viewsel">
                                            <label for="selview">View</label>
                                            <select class="form-control" id="selview">
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="cari">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car" placeholder="Search">
                                        </div>
                                    </div>

                                </div>
                                
                                
                                <div class="table-responsive" id="tabdata">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>No. AK</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>Jenis</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Poin</th>
                                            <th>N.A</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane container" id="tar">
                                <h1 class="display-4">Taruna</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a class="nav-link text-center" href="#" data-toggle="modal" data-target="#upld"><button class=" btn btn-outline-danger"  id="btnup"><strong>Tambah Taruna</strong></button></a>
                                            <div id="upld" class="modal fade modal-show">      
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="nomer">No.AK</label>
                                                                    <input type="text" class="form-control" id="nomer" name="noak">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pang">Pangkat</label>
                                                                    <input type="text" class="form-control" id="pang" name="pangkat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary" name="simpan">UPLOAD</button>                            
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <form action="import-excel.php" method ="post" enctype="multipart/form-data">
                                            <p>Data taruna excel</p>
                                            <input type="file" name="import">
                                            <br>
                                            <br>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                            <br>
                                            <br>
                                        </form>
                                    </div>
                                    <div class="col-md-4" id="cari">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="car" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" id="tabnsp">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>No. AK</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>NSP</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            while($row=mysqli_fetch_assoc($qry)){
                                                echo '<tr>
                                                        <td> '.$row['no_ak'].'</td>
                                                        <td> '.$row['nama'].'</td>
                                                        <td> '.$row['pangkat'].'</td>
                                                        <td> '.$row['nsp'].'</td>

                                                        <td><a class="nav-link text-center" href="#" data-toggle="modal" data-target="#nsp"><button class=" btn btn-outline-danger"  id="btnsp"><strong>NSP</strong></button></a>
                                                        <div id="nsp" class="modal fade modal-show">      
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="nilai_sebelum" value='.$row['nsp'].'>
                                                                            <input type="hidden" name="id_siswa" value='.$row['no_ak'].'>
                                                                            <div class="radio">
                                                                                <label><input type="radio" value="1" name="optradio" id="re" required>Reward</label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label><input type="radio" value="0" name="optradio" id="pu" required>Punishment</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="ket">Keterangan</label>
                                                                                <input type="text" class="form-control" id="ket" name="ket">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="labelPoin" for="poin">Point</label>
                                                                                <input type="text" class="form-control" id="poin" name="poin">
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary" name="simpan">UPDATE</button>                            
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                      </tr>';
                                           }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
	</body>
</html>

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