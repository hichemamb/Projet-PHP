<?php

/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 14/02/2018
 * Time: 03:17
 */

session_start();

session_destroy();

header("Location: index.php");
?>


