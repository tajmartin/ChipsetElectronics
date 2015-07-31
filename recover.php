<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/31/15
 * Time: 7:01 AM
 */

session_start();
require_once("includes/connection.php");
require_once("includes/functions.php");

$currentPage = 'recover';

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

<form action="login.php" method="post" onsubmit="return recoverPassword();">

    <table>

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
                <p>
                    <input type="submit" name="submit" value="Recover" >
                </p>
            </td>
        </tr>
    </table>


</form>

</body>
</html>