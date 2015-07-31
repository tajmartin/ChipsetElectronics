<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 9:01 PM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

$currentPage = 'register';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $query = "INSERT INTO user (name, address, username, password) VALUES ('$name', '$address', '$username', '$password')";
    //echo $query;
    $result = mysqli_query($connection, $query);

    if ($result) {
        //echo "Success!";
        $_SESSION['username'] = $username;
        redirectTo("profile");
    }
    else {
        //echo "Failed!" . mysqli_error($connection);
    }
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

<form action="register.php" method="post" onsubmit="return checkPassword();">

    <table>
        <tr>
            <td>
                Name:
            </td>
            <td>
                <p>
                    <input type="text" name="name">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                Username:
            </td>
            <td>
                <p>
                    <input type="email" name="username">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                <p>
                    <input type="text" name="address">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <p>
                    <input type="password" name="password" id="password">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <p>
                    <input type="password" name="password2" id="password2">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <input type="submit" name="submit" value="Register" >
                </p>
            </td>
        </tr>
    </table>


</form>

</body>
</html>