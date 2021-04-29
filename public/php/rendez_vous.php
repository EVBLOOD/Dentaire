<?php
try {
    $cx = new PDO('mysql:host=localhost;port=3312;dbname=dentaire;charset=utf8', 'root', '');

    $req = $cx->prepare('insert into rdvs (nom,prenom,email,tel,date_rdv,time_rdv,description) values(:nom,:prenom,:email,:tel,STR_TO_DATE(:date_rdv, "%m/%d/%Y"),:time_rdv,:description)');

    $req->bindValue(':nom', $_POST['firstName'], PDO::PARAM_STR);
    $req->bindValue(':prenom', $_POST['lastName'], PDO::PARAM_STR);
    $req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $req->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
    $req->bindValue(':date_rdv', $_POST['firstDate'], PDO::PARAM_STR);
    $time = explode(" ", $_POST['firstTime']);
    $req->bindValue(':time_rdv', $time[0], PDO::PARAM_STR);
    $req->bindValue(':description', $_POST['reason'], PDO::PARAM_STR);


    $return = $req->execute();

    if ($return) {
        $mes = "not error";
    } else {
        $mes = "error";
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1><?php echo $mes; ?></h1>
    </body>

    </html>
<?php
} catch (Exception $e) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1><?php echo $e . ' ' . $mes; ?></h1>

    </body>

    </html>
<?php
} ?>