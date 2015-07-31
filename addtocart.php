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
    //echo "<br>" . $itemnumber;

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
<?php require_once("includes/header.php") ?>

<?php

$row = mysqli_fetch_assoc($result);

$itemnumber = $row['itemnumber'];
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
            <p>
            Item Name:
            </p>
        </td>
        <td>
            <p>
            <?php echo "$name" ?>
            <input type="hidden" name="itemnumber" value="<?php echo $itemnumber ?>" >
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            Price:
            </p>
        </td>
        <td align="right">
            <p>
            <?php echo "$unitprice" ?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            Left in Stock:
            </p>
        </td>
        <td align="right">
            <p>
            <?php echo "$qtyonhand" ?>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            <input type="number" min="1" max="<?php echo $qtyonhand?>" name="quantity">
            </p>
        </td>
        <td align="center">
            <p>
            <input type="submit" name="submit" value="Add to Cart"> <br>
            <!-- <a href="viewcart.php" target=""><button>Add to Cart</button></a> -->
            </p>
        </td>
    </tr>

</table>
</form>

<?php require_once("includes/footer.php") ?>
</body>
</html>