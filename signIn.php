<!-- Bootstrap -->
<link rel="stylesheet" href="stylesheet/css.css" >
    
<div class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
    <input type="text" placeholder="Namae wa" name="pseudo">
      <label>Pseudo</label>
    </div>
    <?php
        if(isset($_COOKIE['pseudo'])){
            echo "value='". $_COOKIE['pseudo'] ."'";
        }
    ?>
    <div class="user-box">
    <input type="email" placeholder="exemple@email.xyz" name="email">
      <label>Pseudo</label>
    </div>
    <?php
        if(isset($_COOKIE['email'])){
            echo "value='". $_COOKIE['email'] ."'";
        }
    ?>
    <div class="user-box">
    <input type="password" name="password">
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
      Crée un compte
    </a>
  </form>
</div>