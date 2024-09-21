<?php

require 'database.class.php';
require '../assests/class/function.class.php';
if($_POST){
$post =$_POST;


//echo "<pre>";
//print_r($post);

if($post['Name'] && $post['LinkedIn'] && $post['Summary2'] && $post['Phone'] && $post['Email'] && $post['Position_title'] && $post['Achievements'] && $post['Project'] && $post['Project_link'] && $post['School_Name'] && $post['School_Location'] && $post['Education_Start_Date'] && $post['Education_End_Date'] && $post['Degree'] && $post['Skills'] && $post['designation'] && $post['DOB'] && $post['Job_Start_Date'] && $post['Job_End_Date']){

    $columns = '';
    $values ='';

foreach($post as $index=>$value)
{
    $value=$db->real_escape_string($value);
    $columns.=$index.',';
    $values.="'$value',";
}

try{
$authid = $fn->Auth()['id'];

$columns.='slug,updated_at,user_id';

$values.="'".$fn->randomstring()."',".time().",".$authid;




    $query = "INSERT INTO resumes";
    $query .= "($columns) ";
    $query .= "VALUES($values)";
  

$db->query($query);

$fn->setAlert('you registerd successfully');

$fn->redirect('../myresume.php');
}
catch(Exception $error){

    $fn->setError($error->getMessage());
$fn->redirect('../resume2.php');
}

}else{
    $fn->setError('please fill the form');
    $fn->redirect('../resume2.php');
}

}
else{
$fn->redirect('../resume2.php');
}
