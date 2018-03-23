<?php
include_once("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dokumen Management Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/pageTar.css">
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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="display-4" id="jud">Document Management</h1>
				</div>
				<div class="col-md-12">
					<div class="table-responsive" id="tabtar">
						<table class="table">
							<thead>
								<tr>
									<th>Deskripsi</th>
                                    <th>Mata Kuliah</th>
                                    <th>Tingkat</th>
                                    <th>Files</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
                                            $sql = "SELECT * FROM doktabel";
                                            $query = mysqli_query($db, $sql);

                                            while($dok = mysqli_fetch_array($query)){

                                                ?>
                                                <tr>

                                                <td><?php echo $dok['deskripsi'] ?></td>
                                                <td><?php echo $dok['makul']?></td>
                                                <td><?php echo $dok['tingkat']?></td>

                                                <td>
                                                <a href="tampung/<?php echo $dok["file"] ?>" target="_blank">View</a>
                                                </td>

                                                 </tr>
                                                 <?php
                                            }
                                            ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>