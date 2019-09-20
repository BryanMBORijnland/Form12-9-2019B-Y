<?php

If(isset($_POST)){
    if(isset($_POST['aspect']) && $_POST['aspect'] == 'inloggen') {
        include "checklogin.db";
        // check login
        // if correct do your stuff
        // or else...
    }
    else {
        include "writetodb.php";
        //$write2db = new DBwriter();
        //$write2db->writeData();
    }
}

if(isset($_GET['login'])){ ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <div class="container"></div>
    <h1>LOGIN</h1>
    <form id="loginform" method="post" action="">
        <input type="hidden" name="aspect" value="inloggen">
        <label for="txtName">Naam</label>
        <input type="text" name="txtName"><br>
        <label for="txtPassword">Wachtwoord</label>
        <input type="password" name="txtPassword"><br>
        <input type="submit" name="btnInloggen" value="Ik wil inloggen">
    </form>

    </body>
    </html>



<?php }
if(isset($_GET['register'])){?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>REGISTREREN</h1>
<form id="loginform" method="post" action="">
    <input type="hidden" name="aspect" value="registreren">
    <label for="txtName">Naam</label>
    <input type="text" name="txtName"><br>
    <input type="submit" name="btnInloggen" value="Registreren">
</form>

</body>
</html>



<?php } ?>