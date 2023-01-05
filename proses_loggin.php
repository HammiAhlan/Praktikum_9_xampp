<?php
session_start();
if(isset($HTTP_RAW_POST_VARS["session_status"]))
{
    echo ("<pre>");
    echo ("User name : <b>".$HTTP_RAW_POST_VARS["session_user"]."</b><br>");
    echo ("password : <b>".$HTTP_RAW_POST_VARS["session_password"]."</b><br>");
    echo ("Click <a href=\"loggout.php\"</a> untuk keluar !");

    echo ("/pre>");
}
?>