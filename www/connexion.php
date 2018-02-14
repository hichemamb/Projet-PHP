<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 13/02/2018
 * Time: 07:11
 */

try {
    $bdd = new PDO('mysql:dbname=form;host=localhost', 'root', '8V4B7u3g');

} catch (PDOException $exception) {
    exit($exception->getMessage());
}
?>