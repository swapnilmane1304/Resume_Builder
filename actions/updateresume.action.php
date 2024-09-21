<?php

require 'database.class.php';
require '../assests/class/function.class.php';


if($_POST){

$post=$_POST;



if($post['id'] && $post['slug'] && $post['Name'] && $post['LinkedIn'] && $post['Summary2'] && $post['Phone'] && $post['Email'] && $post['Position_title'] && $post['Achievements'] && $post['Project'] && $post['Project_link'] && $post['School_Name'] && $post['School_Location'] && $post['Education_Start_Date'] && $post['Education_End_Date'] && $post['Degree'] && $post['Skills'] && $post['designation'] && $post['DOB'] && $post['Job_Start_Date'] && $post['Job_End_Date']){

    $columns='';
    $values='';
$post2 = $post;

unset($post2['id']);
unset($post2['slug']);


   foreach($post2 as $index=>$value){
    $value=$db->real_escape_string($value);
    $columns.=$index."='$value',";
   
   }


   $columns.='updated_at='.time();







    try{
    
        $query = "UPDATE resumes SET ";
        $query.="$columns ";
        $query.="WHERE id={$post['id']} AND slug='{$post['slug']}'";


 
     

 $db->query($query);

  $fn->setAlert('resume updated !');
    $fn->redirect('../myresume.php?resume='.$post['slug']);

die();
    }catch(Exception $error){
 $fn->setError($error->getMessage());
   $fn->redirect('../updateresume.php?resume='.$post['slug']);
    }
   



}else{
     $fn->setError('please fill the form !');
         $fn->redirect('../updateresume.php?resume='.$post['slug']);
    
}


}else{
       $fn->redirect('../updateresume.php?resume='.$post['slug']);
}