<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Upload</title>
</head>
<body>
    <h2>Penggunaan upload</h2>
    <?php
    $name_file=$_FILES["file1"]["name"];
    $tmp_dir=$_FILES["file1"]["tmp_name"];
    copy($tmp_dir,"c:/upload_dir/$name_file");
    echo("Nama file: <b>$name_file</b>");
    ?>
</body>
</html>