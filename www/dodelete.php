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
/*$tables = ['id', 'username'];
$stmt = read_where($bdd, $tables, 'actu.post', 'username', $_SESSION['username']);

$data = $stmt->fetch(PDO::FETCH_ASSOC);
*/
delete($bdd, 'actu.post', $_SESSION['id']);
header('Location: index.php');
