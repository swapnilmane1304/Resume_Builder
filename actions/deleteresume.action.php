
<?php

require 'database.class.php';
require '../assests/class/function.class.php';


if($_GET){

$post=$_GET;

// echo "<pre>";
// print_r($post);



if($post['id']){

$authid = $fn->Auth()['id'];





    try{
    
        $query = "DELETE FROM resumes WHERE id={$post['id']} AND resumes.user_id=$authid";
      

        
       
 $db->query($query);

  $fn->setAlert('resume deleted');
 $fn->redirect('../myresume.php');


    }catch(Exception $error){
 $fn->setError($error->getMessage());
 echo $error->getMessage();
//   $fn->redirect('../myresumes.php');
    }
   



}else{
     $fn->setError('please fill the form !');
       $fn->redirect('../myresume.php');
    
}


}else{
      $fn->redirect('../myresume.php');
}