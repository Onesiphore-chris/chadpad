<?php

    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['keyfram'])){

        $email = htmlspecialchars($_POST['email']);
        $keyfram = htmlspecialchars($_POST['keyfram']);

                var_dump($_POST);
                die('ok';)
            $req = $dbb->prepare('SELECT * FROM `messagerie` WHERE email = '$email'AND  keyfram = '$keyfram'');
            $req->execute();

    }else{

    }
?>