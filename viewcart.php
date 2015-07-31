<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 11:06 PM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

$currentPage = 'viewcart';

//check to see if the item is already in the cart
if (isset($_POST['itemnumber']) && isset($_POST['quantity'])) {
    $itemnumber = $_POST['itemnumber'];
    $quantity = $_POST['quantity'];

    //prevent the quantity from increasing if the page is refreshed
    unset($_POST['quantity']);

    //test data
    //echo "item: " . $_POST['itemnumber'];
    //echo "quantity: " . $_POST['quantity'];

    //if the item is already in the cart, add to the quantity
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'][$itemnumber] += intval($quantity);//intval($_POST['quantity']);

        ///////$cart = $_SESSION['cart'];
        //echo "session1: " . $_SESSION['cart']['itemnumber'];
    }
    else { //create the cart item
        //$_SESSION['cart']['itemnumber'] = intval($_POST['quantity']);
        $_SESSION['cart'] = array($itemnumber => $quantity);
        //echo "session2: " . $_SESSION['cart']['itemnumber'];
    }


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
$cart = $_SESSION['cart'];
foreach ($cart as $itemnumber => $value) {
    //echo "<br>Item: {$itemnumber}, Value: {$value}";
}
?>


<table>
    <p>
    <tr>
        <td>Item</td>
        <td>Quantity</td>
        <td>Line Price</td>
        <td>Total</td>
    </tr>
    </p>
<?php

$sum = 0;

foreach ($cart as $itemnumber => $value) {
    //echo "<br>Item: {$itemnumber}, Value: {$value}";
    $query = "select * from inventoryitem where itemnumber = '$itemnumber'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    //echo $query;
    echo "<p>";
    echo "<tr>";
    echo "<td> {$row['name']} </td>";
    echo "<td> {$value} </td>";
    echo "<td> {$row['unitprice']} </td>";

    $totalitemprice = $row['unitprice'] * $value;
    $sum += $totalitemprice;

    echo "<td> {$totalitemprice} </td>";
    echo "</tr>";
    echo "</p>";
}

//add total to cart
$_SESSION['carttotal'] = $sum;

?>
    <p>
    <tr>
        <td colspan="3" align="center">Grand Total:</td>
        <td><?php echo "$" . $sum ?></td>
    </tr>
    </p>
    <p>
    <tr>
        <td align="center"><a href="checkout.php" target=""><button>Checkout</button></a></td>
    </tr>
    </p>
</table>

<?php require_once("includes/footer.php") ?>
</body>
</html>