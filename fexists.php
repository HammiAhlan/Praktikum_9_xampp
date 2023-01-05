<html>
    <head>
    <title>Pemerosesan file</title>
    </head>
    <body>
     <h2>Pemeriksaan file</h2>
     <?php
     $file='C:\\Teks.txt';
     if(file_exists($file))
     {
        echo("file <b> $file</b> sudah ada !");
     }else
     {
        echo("file<b> $file</b> tidak ada !");
        
     }
     ?>   

    </body>
</html>