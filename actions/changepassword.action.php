<?php

require 'database.class.php';
require '../assests/class/function.class.php';


if($_POST){


$post=$_POST;

if($post['password']){

   $password=$db->real_escape_string($post['password']);
   $email = $fn->getSession('email');

$db->query("UPDATE users SET password='$password' WHERE email_id='$email'");
  

      $fn->setAlert('password is changed !');
      $fn->redirect('../Signin.php');
   



}else{
     $fn->setError('please enter your new password');
    $fn->redirect('../change-password.php');
    
}


}else{
    $fn->redirect('../change-password.php');
}