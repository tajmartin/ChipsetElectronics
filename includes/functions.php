<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 4:42 PM
 */

function jsEcho($str) {
    echo "<script type=\"text/javascript\"> alert(\"$str\") </script>";
}

function redirectTo($link) {
    header("Location: " . $link);
}

function addToCart($itemnumber, $quantity) {
    if (isset($_SESSION['cart'][$itemnumber])) {
        $_SESSION['cart'][$itemnumber] += intval($quantity);
    }
    else {
        $_SESSION['cart'][$itemnumber] = intval($quantity);
    }
}

?>