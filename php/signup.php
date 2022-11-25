<?php

    session_start();
    require_once 'config.php';

     
   if(!empty($_POST['submit']))
   {
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $keyfram = htmlspecialchars($_POST['keyfram']);
        // $image = $_FILES['image']['name'];
        // $image_size = $_FILES['image']['size'];
        // $image_tmp_name = $_FILES['image']['tmp_name'];
        // $image_folder = 'images/'.$image; 
        
        $select = $dbb->prepare("SELECT * FROM `messagerie` WHERE email = '$email' AND keyfram = '$keyfram'");
        $select->execute();
        $data = $select->fetch();
        $row = $select->rowCount();
        
        if($row > 0)
        {
            $message['user'] = 'user alrealy exit';
        }else{
            
            $key = hash('md5', $keyfram);
            $insert = $dbb->prepare("INSERT INTO `messagerie`(fname, lname, email, keyfram) VALUES('{$fname}', '{$lname}', '{$email}', '{$key}')");
           $insert->execute(array(
               $fname => 'fname',
               $lname => 'lname',
               $email => 'email',
               $key => 'keyfram'
           ));
            echo header('location:../login.php');
        }
      
    }else{
        $message['login'] = 'donnee non envoyer';
    }

    


    




   
 /*if(!empty($_POST['fname']) && 
!empty($_POST['lname']) && 
!empty($_POST['email']) && 
!empty($_POST['password']) && 
!empty($_POST['image']) ){
    die('ok');
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
      $image = $_FILES['image']['name'];
      /*  $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'images/'.$image; 
       
             

} die('false');

*/

    






?>