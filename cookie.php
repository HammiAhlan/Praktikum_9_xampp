<?php
if (isset($_POST["no_induk"]))
{
    setcookie("cookie_no_induk",$_POST["no_induk"]);
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h2>Penggunaan cookies</h2>
        <form action="cookie.php" method="POST">
            No. Induk : <input type="text" name="no_induk" size="10"><input type="submit" name="go" value="GO">
        </form>
        <?php
        if (isset($_POST["no_induk"]))
        {
            echo("Klik <a href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
        }
        ?>
</body>
</html>
