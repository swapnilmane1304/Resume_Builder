<?php

require 'database.class.php';
require '../assests/class/function.class.php';
if($_POST){
$post =$_POST;

if($post['email_id'] && $post['password']){


$email_id = $db->real_escape_string($post['email_id']);
$password = $db->real_escape_string($post['password']);
$result = $db->query("SELECT id,full_name FROM users WHERE (email_id='$email_id' && password='$password')");

$result = $result->fetch_assoc();

if($result){
    $fn->setAlert('logged in');
  $fn->setAuth($result);
  $fn->redirect('../myresume.php');
  #$fn->redirect('../overlay2.html');
    
}else{
    $fn->setError('incorrect email id or password');
    $fn->redirect('../Signin.php');
}



}else{
    $fn->setError($email_id.'please fill the form');
    $fn->redirect('../Signin.php');
}

}
else{
$fn->redirect('../Signin.php');
}
