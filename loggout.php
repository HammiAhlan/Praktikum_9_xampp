<?php
session_start();
session_destroy();
echo ("Loggout selesai !<br>");
echo ("kembali ke halaman loggin klik <a href=\"loggin.php\">Loggin</a>!");
?>