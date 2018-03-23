<?php
    
    use Box\Spout\Reader\ReaderFactory;
    use Box\Spout\Common\Type;
    require_once ('koneksi.php');
    require_once ('Spout/Autoloader/autoload.php');
    if(!empty($_FILES['import']['name'])){
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES['import']['name']);

    // check file has extension xlsx, xls and also check
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls')
        && $_FILES['import']['size'] > 0 )
    {
        $file = $_FILES['import']['tmp_name'];

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($file);
        $count = 0;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet)
        {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row)
            {

                // It reads data after header. In the my excel sheet,
                // header is in the first row.
                if ($count >= 0) {

                    // Data of excel sheet
                    $noAk = $row[0];
                    $nama = $row[1];
                    $pangkat=$row[2];
                    $nsp =$row[3];
                    //Here, You can insert data into database.
                    $qry = "INSERT INTO data_taruna (no_ak,nama,pangkat,nsp) VALUES ('$noAk','$nama','$pangkat','$nsp')";
                    $res = mysqli_query($con,$qry);

                }
                $count++;
            }
        }

        if($res)
        {
            echo "Your file Uploaded Successfull";
        }
        else
        {
            echo "Your file Uploaded Failed";
        }

        // Close excel file
        $reader->close();
    }
    else
    {
        echo "Please Choose only Excel file";
    }
}
else
{
    echo "File is Empty"."<br>";
    echo "Please Choose Excel file";
}


?>