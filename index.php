<?php
session_start();
$userConnected = isset($_SESSION['email']);
?>



<?php

if($userConnected){
    echo "<h1>Vous êtes connecté !</h1>";
    echo "<a href='deconnexion.php'>Se déconnecter</a>";
}else{
    echo '<a href="logIn.php">Se connecter</a>';
    echo '<a href="signIn.php">Créer un compte</a>';
}

if(isset($_GET['message'])){
    echo "<p>" . $_GET['message'] . "</p>";
}

?>