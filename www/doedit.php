
<?php
/**
 * Created by PhpStorm.
 * User: fabii
 * Date: 15/02/2018
 * Time: 12:37
 */
session_start();
require_once "connexion.php";
require_once "./crud.php";
$tables = ['id', 'username', 'email'];
$stmt = read_where($bdd, $tables, 'form.users', 'username', $_SESSION['username']);

$data = $stmt->fetch(PDO::FETCH_ASSOC);

$requete = "UPDATE 
  form.users 
SET 
  username = ?, 
  email = ?
WHERE id = " . $data['id'] . ";";

var_dump($data);
var_dump($requete);
var_dump($_SESSION);
var_dump($_POST);

$stmt = $bdd->prepare($requete);
$stmt->execute([$_POST['username'], $_POST['email']]);
$_SESSION['username'] = $_POST['username'];
header('Location: infos.php');

?>
<!-- $requete = "UPDATE 
  form.users 
SET 
  `username` = :username, 
  `email` = :email
WHERE `username` = " . $_SESSION['username'] . "
;";
$stmt = $bdd->prepare($requete);
$stmt->bindValue(':username', $_POST['username']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->execute();
$_SESSION['username'] = $_POST['username'];
header('Location: infos.php');

?> -->