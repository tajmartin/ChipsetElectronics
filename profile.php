<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/31/15
 * Time: 6:45 AM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

$currentPage = 'profile';

if (!isset($_SESSION['username'])) {
    redirectTo("login.php");
}

if (isset($_POST['submit'])) {
    $query2 = "update user where username like ";
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

$query = "select * from user where username like '{$_SESSION['username']}'";
//echo $query;
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

?>


<form>

    <table>
        <tr>
            <p>
            <td>Name:</td>
            <td><input type="text" value="<?php echo $row['name']?>" name="name"></td>
            </p>
        </tr>
        <tr>
            <p>
            <td>Username:</td>
            <td><input type="text" value="<?php echo $row['username']?>" name="username"></td>
            </p>
        </tr>
        <tr>
            <p>
            <td>Address:</td>
            <td><input type="text" value="<?php echo $row['address']?>" name="address"></td>
            </p>
        </tr>
        <tr>
            <td><input type="submit" value="Update Profile" name="submit"></td>
            <td></td>
        </tr>

    </table>

</form>


<?php require_once("includes/footer.php") ?>
</body>
</html>