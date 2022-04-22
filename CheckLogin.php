<?php 
if(isset($_POST['email']) && !empty($_POST['email'])){
    setcookie('email', $_POST['email'], time() + 24 * 60 * 60);
}

if(empty($_POST['email']) || empty($_POST['password'])){
    header('location: logIn.php?message=Vous devez remplir les 2 champs.');
    exit;
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    header('location: logIn.php?message=Email invalide.');
    exit;
}

include('includes/db.php');         

$q = 'SELECT id FROM USER WHERE email = :email AND password = :password';
$req = $bdd->prepare($q);
$req->execute([
    'email' => $_POST['email'],
    'password' => hash('sha512', $_POST['password'])
]);

$results = $req->fetchAll();

if(count($results) == 0){
    header('location: logIn.php?erreur=Identifiants incorrects');
    exit;
}else{
    session_start();
    $_SESSION['email'] = $_POST['email'];

    header('location: index.php');
    exit;
}

?>