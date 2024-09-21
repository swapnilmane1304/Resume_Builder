<?php
require './assests/includes/header.php';
$fn->nonAuthPage();
?>


  <form action="actions/register_action.php" method="post">
    <div class="container">
        <div class="brand-logo"></div>
        
        <div class="brand-title">BUILD-IT</div>
  
        <div class="inputs">
          <label>Name</label>
          <input type="text" name="full_name" placeholder="Ram" required>
          <label>EMAIL</label>
          <input type="email" name="email_id" placeholder="example@test.com" required>
          <label>PASSWORD</label>
          <input type="password" name="password" placeholder="Min 6 charaters long" required>
          <button type="submit">LOGIN</button>
        </div>
       <a href="Signin.php">SignIn</a>
      </div>
    </form>
    <script
    type="module"
    src="https://cdn.jsdelivr.net/npm/@bufferhead/nightowl@0.0.14/dist/nightowl.js"

></script>
<script>
  let vid = document.getElementById("myVideo");
vid.playbackRate = 0.8;
</script>
<?php
require './assests/includes/footer.php';
?>