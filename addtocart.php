<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 7:45 PM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

if (isset($_GET['itemnumber'])) {
    $itemnumber = $_GET['itemnumber'];
    $query = "select * from inventoryitem where itemnumber = $itemnumber";
    echo $query;

    $result = mysqli_query($connection, $query);

}

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title></title>
</head>
<body>

<?php

$row = mysqli_fetch_assoc($result);

echo "{$row['itemnumber']}<br>";
echo "{$row['name']}<br>";
echo "{$row['unitprice']}<br>";
echo "{$row['qtyonhand']}<br>";

?>

</body>
</html>