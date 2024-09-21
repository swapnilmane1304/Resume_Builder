<?php
require './assests/class/function.class.php';
require './actions/database.class.php';
$fn->authPage();
$resumes = $db->query('SELECT * FROM resumes WHERE user_id='.$fn->Auth()['id'].' ORDER BY id DESC');
$resumes = $resumes->fetch_all(1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resumes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            height: 100vh;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);

        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                
                Resume Builder
            </a>
            <div>
                <a href="account.php" class="btn btn-sm btn-dark"><i class="bi bi-person-circle"></i> Profile</a>
                <a href="actions/logout.action.php" class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i></a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Resumes</h5>
                <div>
                    <a href="resume2.php" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                </div>
            </div>

<?php
if($resumes){

   

    ?>

<div class="d-flex flex-wrap">

<?php
foreach($resumes as $resume){


?>
<div class="col-12 col-md-6 p-2">
    <div class="p-2 border rounded">
        <h5><?=$resume['Job_Title']?></h5>


        <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
            Last Updated <?=date('d M,Y h:i A',$resume['updated_at'])?>
        </p>
        <div class="d-flex gap-2 mt-1">
            
            <a href="updateresume.php?resume=<?=$resume['slug']?>" class="text-decoration-none small"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="actions/deleteresume.action.php?id=<?=$resume['id']?>" class="text-decoration-none small"><i class="bi bi-trash2"></i> Delete</a>
            
        </div>
    </div>
</div>



<?php
}
?>


    <?php

}else{
    ?>
           <div class="text-center py-3 border rounded mt-3" style="background-color: rgba(236, 236, 236, 0.56);">
                <i class="bi bi-file-text"></i> No Resumes Available
            </div>


    <?php
}
?>


          


            

        </div>

    </div>

</body>

</html>