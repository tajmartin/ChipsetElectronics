<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/30/15
 * Time: 4:55 PM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

//login error field - boolean
$loginErrorVisible = false;
//keep track of current page in order to create smart links
$currentPage = 'login';

if (isset($_SESSION['username'])) {
    redirectTo("profile.php");
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "select * from user where username like '$username' and password like '$password' limit 1";

        //jsEcho($query);

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            redirectTo("profile.php");

        }
        else {
            //jsEcho("Invalid username or password!");
            $loginErrorVisible = true;
        }
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

<form action="login.php" method="post">

    <table>
        <tr>
            <?php
            if ($loginErrorVisible) {

                echo "<td colspan=\"2\" class=\"redText\">";

                echo "Invalid Login!";

                echo "</td>";
            }
            ?>
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
                Password:
            </td>
            <td>
                <p>
                    <input type="password" name="password">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <input type="submit" name="submit" value="Login">
                </p>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td align="right">
                <a href="recover.php">Forgot Login?</a>
            </td>
        </tr>
    </table>


</form>

</body>
</html>