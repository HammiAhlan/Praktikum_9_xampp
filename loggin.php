<html>
<?php
session_start();
if(isset($HTTP_POST_VARS["insert"]))
{
    if(($HTTP_POST_VARS["user"]!="")&&($HTTP_POST_VARS ["password"]!=""))


{
        $_session_register("session status");
        $_session_register("session user");
        $_session_register("session password");
        $session_status = "loggin";
        $session_user = $HTTP_POST_VARS["user"];
        $session_password = $HTTP_POST_VARS["password"];
        header("Location:proses_loggin.php");
        exit;

      }
}?>
</html>
</head>
<title>Session</title>
 <body>
    <h2>Penggunaan session</h2>
    <pre>
        <form action="loggin.php" method="post">
            User Name : <input type="text" name="user" size="15">
            User password : <input type="password" name="password" size="15">
                          <input type="hidden" name="insert">
                          <input type="submit" name="loggin" value="Loggin">
        </form>
    </pre>
 </body>
</head>