<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 7:06 PM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");
$currentPage = 'inventory';

$query = "select * from inventoryitem";

$result = mysqli_query($connection, $query);



?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title></title>
</head>
<body>
<?php require_once("includes/header.php") ?>

<table>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        //$itemnumber
        echo "<p>";
        echo "<tr>";
        //echo "<td>{$row['itemnumber']}</td>";
        echo "<td><a href=\"addtocart.php?itemnumber={$row['itemnumber']}\">{$row['name']}</a></td>";
        echo "<td align=\"right\">{$row['unitprice']}</td>";
        //echo "<td>{$row['qtyonhand']}</td>";
        echo "</tr>";
        echo "</p>";

    }
    ?>
</table>

</body>
</html>