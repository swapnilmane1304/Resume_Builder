<?php
#$title = "Create Resume | Resume Builder";
#require './assets/includes/header.php';
#require './assets/includes/navbar.php';
require './assests/class/function.class.php';
require './actions/database.class.php';
$fn->authPage();
$slug=$_GET['resume']??'';
$resumes = $db->query("SELECT * FROM resumes WHERE ( slug='$slug' AND user_id=".$fn->Auth()['id'].") ");
$resume = $resumes->fetch_assoc();
if(!$resume){
    $fn->redirect('myresumes.php');
}
/*
$exps = $db->query("SELECT * FROM experiences WHERE (resume_id=".$resume['id']." ) ");
$exps = $exps->fetch_all(1);

$edus = $db->query("SELECT * FROM educations WHERE (resume_id=".$resume['id']." ) ");
$edus = $edus->fetch_all(1);

$skills = $db->query("SELECT * FROM skills WHERE (resume_id=".$resume['id']." ) ");
$skills = $skills->fetch_all(1);*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume2.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body >

    <form action ="actions/updateresume.action.php" method="post" class="cv-form">
    <input type="hidden" name="id" value="<?=$resume['id']?>" />
            <input type="hidden" name="slug" value="<?=$resume['slug']?>" />
        <h1>
            Personal Details
        </h1>
        
        <div class="Container" id="non_print_area">
        
            
                <div class="child1">
            <label for="Name">Name</label>
            <input type="text" value="<?=@$resume['Name']?>" name="Name" id="Name" onkeyup="generateCV()">
            
            <label for="DOB">DOB</label>
            <input type="date" value="<?=@$resume['DOB']?>" name="DOB" id="DOB" onkeyup="generateCV()">
    
            
            <label for="LinkedIn">LinkedIn</label>
            <input type="text" value="<?=@$resume['LinkedIn']?>" name="LinkedIn" id="LinkedIn" onkeyup="generateCV()">
           

            <label for="Summary2">Summary</label>
            <textarea name="Summary2" id="Summary2" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Summary2']?></textarea>
                </div>
    
                <div class="child2">
                    <label for="Phone">Phone</label>
                    <input type="number" value="<?=@$resume['Phone']?>" name="Phone" id="Phone" onkeyup="generateCV()">
            
                    <label for="Email">Email</label>
                    <input type="Email" value="<?=@$resume['Email']?>" name="Email" id="Email" onkeyup="generateCV()">
            
                   
                        </div>
                        
           
        
    </div>
    
    <h1>
        Professional Experience
    </h1>
    
    <div class="Container2" id="non_print_area1">
        
            
        <div class="child4">
    <label for="Position_title">Previous Experience</label>
    <textarea name="Position_title" id="Position_title" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Position_title']?></textarea>
    
    
    <label for="Job_Start_Date">Start Date</label>
    <input type="date" value="<?=@$resume['Job_Start_Date']?>" name="Job_Start_Date" id="Job_Start_Date" onkeyup="generateCV()">
    
    <label for="Job_End_Date">End Date</label>
    <input type="date" value="<?=@$resume['Job_End_Date']?>" name="Job_End_Date" id="Job_End_Date" onkeyup="generateCV()">
    
    <label for="Job_title">Job title</label>
    <input type="text" value="<?=@$resume['Job_Title']?>" name="Job_title" id="Job_title" onkeyup="generateCV()">
        </div>
    
    </div>
    
    <h1>
      Achievements
    </h1>
    
    <div class="Container2" id="non_print_area2">
        
            
        <div class="child4">
    <label for="Achievements">Achievements</label>
    <textarea name="Achievements" id="Achievements" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Achievements']?></textarea>
    <label for="Achievement_date">Date</label>
    <input type="date" value="<?=@$resume['Achievement_date']?>" name="Achievement_date" id="Achievement_date" onkeyup="generateCV()">
    </div>
    </div>
    
    <h1>
        Projects
      </h1>
      
      <div class="Container2" id="non_print_area3">
          
              
          <div class="child4">
      <label for="Project">Project Name</label>
      <textarea name="Project" id="Project" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Project']?></textarea> 
      <label for="Project_link">Project Link</label>
      <input type="text" value="<?=@$resume['Project_link']?>" name="Project_link" id="Project_link" onkeyup="generateCV()">
    
      </div>
      </div>
        
        <h1>
            Education
        </h1>
        
        <div class="Container3" id="non_print_area4">
            
                
            <div class="child5">
        <label for="School_Name">School Name</label>
        <input type="text" value="<?=@$resume['School_Name']?>" name="School_Name" id="School_Name" onkeyup="generateCV()">
        
        <label for="School_Location">School Location</label>
        <input type="text" value="<?=@$resume['School_Location']?>" name="School_Location" id="School_Location" onkeyup="generateCV()">
        
        <label for="Education_Start_Date">Start Date</label>
        <input type="date" value="<?=@$resume['Education_Start_Date']?>" name="Education_Start_Date" id="Education_Start_Date" onkeyup="generateCV()">
        
        <label for="Education_End_Date">End Date</label>
        <input type="date" value="<?=@$resume['Education_End_Date']?>" name="Education_End_Date" id="Education_End_Date" onkeyup="generateCV()">
        
        <label for="Degree">Qualifications</label>
        <textarea name="Degree" id="Degree" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Degree']?></textarea>
        <label for="skills">Skills</label>
        <textarea name="Skills" id="Skills" onkeyup="generateCV()" style="height: 100px; width:100%"><?=@$resume['Skills']?></textarea>
        <label for="designation">Designation</label>
        <input type="text" value="<?=@$resume['designation']?>" name="designation" id="designation" onkeyup="generateCV()">
        
    
            </div>
        </div>
        <div class="btn">
      <!--  <label for="Updateresume">Update</label>-->
        <input type="submit" id="Updateresume">
        
   </div>
    </form>
    <div class="output">

    </div>
     
    <!-- button for toggle   -->
   <div class="btn">
        <button onclick="toggle()">Preview or edit</button>
   </div>
 
   <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>-->
    <script src="resume2.js"></script>
</body>
 