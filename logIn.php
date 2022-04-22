<!-- Bootstrap -->
<link rel="stylesheet" href="stylesheet/css.css" >
    
<div class="login-box">
  <h2>Login</h2>
  <form action="checkLogIn.php" method="post">
    <div class="user-box">
      <input type="email" placeholder="exemple@email.abc" name="email" >
      <label>Email</label>
    </div>
    <?php
        if(isset($_COOKIE['email'])){
            echo " value='". $_COOKIE['email'] ."'";
        }
    ?>
    <div class="user-box">
      <input type="password" name="" >
      <label>Password</label>
    </div>
    <?php
        if(isset($_GET['erreur'])){
            echo "<p>" . $_GET['erreur'] . "</p>";
        };
    ?>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Se connecter">
    </a>
  </form>
</div>