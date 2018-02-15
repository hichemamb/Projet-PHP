
<?php

require_once "connexion.php";
$requete = "UPDATE
  `users`
SET
  `username` = :username,
  `email` = :email
;";
$stmt = $bdd->prepare($requete);
$stmt->bindValue(':username', $_POST['username']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->execute();
$_SESSION['username'] = $_POST['username'];
header('Location: infos.php');
