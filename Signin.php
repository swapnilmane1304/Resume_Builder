<?php
require './assests/includes/header.php';
$fn->nonAuthPage();
?>

<!--<video autoplay muted loop id="myVideo">
  <source src="http://localhost/final-project/video3.mp4" type="video/mp4">
</video>-->
  <form action="actions/login.action.php" method="post">
    <div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">Build-it</div>
        <div class="inputs">
          <label>EMAIL</label>
          <input type="email" name ="email_id" placeholder="example@test.com" required>
          <label>PASSWORD</label>
          <input type="password" name="password" placeholder="Min 6 charaters long" required>
          <button type="submit">LOGIN</button>
        </div>
       <a href="register.php">Signup</a><br><br>
       <a href="forgot-password.php">Forgot password</a>
      </div>
    </form>

    <script
    type="module"
    src="https://cdn.jsdelivr.net/npm/@bufferhead/nightowl@0.0.14/dist/nightowl.js"
></script>
    <?php
require './assests/includes/footer.php';
?>