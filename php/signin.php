<?php
    session_start();
    require_once 'config.php';

    if (isset($_POST['email']) && isset($_POST['keyfram']))
     {
        $email = htmlspecialchars($_POST['email']);
        $keyfram = htmlspecialchars($_POST['keyfram']);


           
        $select = $bdd->prepare('SELECT * FROM messagerie WHERE email = ? AND keyfram = ?');
        $select->execute(array(
            'email' => $email,
            'keyfram' => $keyfram
        ));
        var_dump($select
    );

        $data = $select->fetch();
        $row = $select->rowCount();

        if ($row == 1) { 
            (filter_var($email, FILTER_VALIDATE_EMAIL));
           

                header('Location:../user.php');
        
            }else header('Location:../index.php?login_err=email');
     


    } else header('Location:../index.php');
?>