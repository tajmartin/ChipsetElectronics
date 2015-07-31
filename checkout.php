<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/31/15
 * Time: 5:41 AM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

$currentPage = 'checkout';

if (isset($_SESSION['creditcard']) && isset($_SESSION['ccv']) && isset($_SESSION['zipcode'])) {

}

if (isset($_POST['confirm_order'])) {
    unset($_SESSION['cart']);
    redirectTo("inventory.php");
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/script.js"></script>
    <title></title>
</head>
<body>
<?php require_once("includes/header.php") ?>

<form action="checkout.php" method="post">
    <table>
        <p>
        <tr>
            <td>Credit Card #:</td>
            <td><input type="number" name="creditcard"></td>
        </tr>
        </p>
        <p>
        <tr>
            <td>CCV:</td>
            <td><input type="number" name="ccv"></td>
        </tr>
        </p>
        <p>
        <tr>
            <td>Zip Code:</td>
            <td><input type="number" name="zipcode"></td>
        </tr>
        </p>
        <p>
        <tr>
            <td colspan="2" align="center" ><input type="submit" value="Confirm Order" name="confirm_order"> </td>
        </tr>
        </p>
    </table>
</form>

<?php require_once("includes/footer.php") ?>
</body>
</html>