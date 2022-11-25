<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['submit']))
        {

        $email = htmlspecialchars($_POST['email']);
        $keyfram = htmlspecialchars(($_POST['keyfram']));

        $sql = "SELECT * FROM `messagerie` where email = '$email' ";
        $result = $dbb->prepare($sql);
        $result->execute();

        $row = $result->rowCount();
        if($row > 0)
        {
            $data = $result->fetchAll();
           
            $keyfram = hash('md5' ,  $keyfram);
            if(password_verify($keyfram, $data[0]['keyfram']));
            {
                filter_var($email, FILTER_VALIDATE_EMAIL);
               echo header('location:../user.php');
                $_SESSION['email'] = $email;
            }
        }
        else
        {
            echo 'compte inexistant';
            $message[] = ' le compte n\'existe pas !!';
        }
         
    }else{
        echo 'veillez remplir les champs';
    }
?>