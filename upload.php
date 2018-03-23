<?php
include_once 'koneksi.php';
if(isset($_POST['simpan']))
{    
     
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="tampung/";
	$des = $_POST['deskripsi'];
	$makul = $_POST['makul'];
	$tkt = $_POST['tingkat'];
	
	// new file size in KB
	// $new_size = $file_size/1044070;  
	// new file size in KB
	$allowed_extensions = array(
    'mp3', 'mp4', 'doc', 'zip', 'rar',
    'docx', 'ppt', 'pps', 'pptx' // ...
	);

	$new_file_name = strtolower($file);
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		if (!in_array(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION), $allowed_extensions)) {
		$sql="INSERT INTO doktabel(deskripsi,makul,tingkat,file) VALUES('$des','$makul','$tkt','$final_file')";
		mysqli_query($db,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
		}
		else{
			die("You can't upload this.");
		}
		
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>