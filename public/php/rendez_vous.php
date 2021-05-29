<?php
try {
    $cx = new PDO('mysql:host=localhost;port=3312;dbname=dentaire;charset=utf8', 'root', '');

    $time = explode(" ", $_POST['firstTime']);
    $date = $_POST['firstDate'];

    $sq = "select count(*) as 'nbrdv' from rdvs where time_rdv='$time[0]' and DATE(date_rdv)='$date'";
    $ret = $cx->query($sq);

    $tab = $ret->fetch();
    $count = $tab['nbrdv'];

    if ($count == 0) {
        $req = $cx->prepare('insert into rdvs (nom,prenom,email,tel,date_rdv,time_rdv,description) values(:nom,:prenom,:email,:tel,STR_TO_DATE(:date_rdv, "%m/%d/%Y"),:time_rdv,:description)');

        $req->bindValue(':nom', $_POST['firstName'], PDO::PARAM_STR);
        $req->bindValue(':prenom', $_POST['lastName'], PDO::PARAM_STR);
        $req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $req->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);

        $date = date("m/d/Y", strtotime($_POST['firstDate']));
        $req->bindValue(':date_rdv', $date, PDO::PARAM_STR);
        $time = explode(" ", $_POST['firstTime']);
        $req->bindValue(':time_rdv', $time[0], PDO::PARAM_STR);
        $req->bindValue(':description', $_POST['reason'], PDO::PARAM_STR);

        $return = $req->execute();

        if ($return) {
            $mes = "Votre rendez-vous a été envoyé.";
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    .alert {
                        padding: 20px;
                        background-color: #d4edda;
                        color: #155724;
                        opacity: 1;
                        transition: opacity 0.6s;
                        margin-bottom: 15px;
                        font-family: "Poppins", sans-serif;
                        border-color: #c3e6cb;
                        margin-left: -8px;
                        margin-right: -8px;
                    }

                    .alert.success {
                        background-color: #d4edda;
                    }
                </style>
                <script>
                    var cnt = 0;

                    function hide_message() {

                        if (cnt == 6) {
                            document.getElementById("meg").outerHTML = "";
                        }
                        cnt++;
                        setTimeout(hide_message, 2000);
                    }
                </script>
            </head>

            <body id="meg" onload="hide_message()">
                <div class="alert success">
                    <strong>Succès!</strong> <?php echo $mes; ?>
                </div>
            </body>

            </html>
        <?php
        } else {
            $mes = "Une erreur s'est produite lors de l'envoi de votre rendez-vous.";
        ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    .alert {
                        padding: 20px;
                        background-color: #f44336;
                        color: #731D25;
                        opacity: 1;
                        transition: opacity 0.6s;
                        margin-bottom: 15px;
                        font-family: "Poppins", sans-serif;
                        border-color: #F5C6CB;
                        margin-left: -8px;
                        margin-right: -8px;
                    }

                    .alert.warning {
                        background-color: #F8D7DA;
                    }
                </style>

                <script>
                    var cnt = 0;

                    function hide_message() {

                        if (cnt == 6) {
                            document.getElementById("meg").outerHTML = "";
                        }
                        cnt++;
                        setTimeout(hide_message, 2000);
                    }
                </script>
            </head>

            <body onload="hide_message()" id="meg">
                <div class="alert warning">
                    <strong>Erreur!</strong> <?php echo $mes ?>
                </div>
            </body>

            </html>
        <?php

        }
    } else {
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                .alert {
                    padding: 20px;
                    opacity: 1;
                    transition: opacity 0.6s;
                    margin-bottom: 15px;
                    font-family: "Poppins", sans-serif;
                    margin-left: -8px;
                    margin-right: -8px;
                    color: #8a6d3b;
                    background-color: #fcf8e3;
                    border-color: #faebcc;
                }

                .alert.success {
                    background-color: #fcf8e3;
                }
            </style>
            <script>
                var cnt = 0;

                function hide_message() {

                    if (cnt == 6) {
                        document.getElementById("meg").outerHTML = "";
                    }
                    cnt++;
                    setTimeout(hide_message, 2000);
                }
            </script>
        </head>

        <body id="meg" onload="hide_message()">
            <div class="alert success">
                <strong>Avertissement!</strong> <?php echo "L'utilisateur a précédemment réservé ce rendez-vous" ?>
            </div>
        </body>

        </html>

    <?php
    }
} catch (Exception $e) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .alert {
                padding: 20px;
                background-color: #f44336;
                color: #731D25;
                opacity: 1;
                transition: opacity 0.6s;
                margin-bottom: 15px;
                font-family: "Poppins", sans-serif;
                border-color: #F5C6CB;
                margin-left: -8px;
                margin-right: -8px;
            }

            .alert.warning {
                background-color: #F8D7DA;
            }
        </style>

        <script>
            var cnt = 0;

            function hide_message() {

                if (cnt == 6) {
                    document.getElementById("meg").outerHTML = "";
                }
                cnt++;
                setTimeout(hide_message, 2000);
            }
        </script>
    </head>

    <body onload="hide_message()" id="meg">
        <div class="alert warning">
            <strong>Erreur!</strong> <?php echo $mes . ' Erreur de ' . $e ?>
        </div>
    </body>

    </html>
<?php
} ?>