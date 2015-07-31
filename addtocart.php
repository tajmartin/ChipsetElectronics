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

$currentPage='addtocart';

if (isset($_GET['itemnumber'])) {
    $itemnumber = $_GET['itemnumber'];
    $query = "select * from inventoryitem where itemnumber = $itemnumber";
    //echo $query;

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

$name = $row['name'];
$unitprice = $row['unitprice'];
$qtyonhand = $row['qtyonhand'];


//echo "{$row['itemnumber']}<br>";
//echo "{$row['name']}<br>";
//echo "{$row['unitprice']}<br>";
//echo "{$row['qtyonhand']}<br>";

?>
<form action="viewcart.php" method="post">
<table>
    <tr>
        <td>
            Item Name:
        </td>
        <td>
            <?php echo "$name" ?>
        </td>
    </tr>
    <tr>
        <td>
            Price:
        </td>
        <td align="right">
            <?php echo "$unitprice" ?>
        </td>
    </tr>
    <tr>
        <td>
            Left in Stock:
        </td>
        <td align="right">
            <?php echo "$qtyonhand" ?>
        </td>
    </tr>
    <tr>
        <td>
            <input type="number" min="1" max="<?php echo $qtyonhand?>">
        </td>
        <td align="center">
            <input type="submit" name="submit" value="Add to Cart">
        </td>
    </tr>

</table>
</form>

</body>
</html>