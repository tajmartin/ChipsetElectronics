<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 4:51 PM
 */

DEFINE("DB_HOST", "localhost");
DEFINE("DB_USER", "odin");
DEFINE("DB_PASSWORD", "");
DEFINE("DB_NAME", "chipset");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());

?>