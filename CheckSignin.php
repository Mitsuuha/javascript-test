<?php 
if(isset($_POST['email']) && !empty($_POST['email'])){
	setcookie('email', $_POST['email'], time() + 24 * 60 * 60);
}

if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
	setcookie('pseudo', $_POST['pseudo'], time() + 24 * 60 * 60);
}

if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['pseudo'])){
	header('location: signIn.php?erreur=Veuillez remplir tous les champs');
    exit;
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	header('location: signIn.php?erreur=Email incorrect');
    exit;
}

if(strlen($_POST['password']) < 6 || strlen($_POST['password']) > 12){
    header('location: signIn.php?erreur=Le mot de passe doit contenir 6 à 12 caractères');
    exit;
}

include('includes/db.php');

$q = 'INSERT INTO USER (pseudo, email, password) VALUES (:pseudo, :email, :password)';
$req = $bdd->prepare($q);
$req->execute([
    'pseudo' => $_POST['pseudo'],
    'email' => $_POST['email'],
    'password' => hash('sha512', $_POST['password'])
]);

header('location: index.php?message=compte créé avec succès');
exit;

?>