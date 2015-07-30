<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 6:33 PM
 */

session_start();
session_destroy();
require_once("includes/functions.php");
redirectTo("login.php");

?>