<?php
/**
 * Created by PhpStorm.
 * User: odin
 * Date: 7/31/15
 * Time: 6:29 AM
 */
?>

<div class = "header">
    <img src="img/PantherWare.png" alt="logo">
    <h3>Chipset Electronics</h3>
</div>

<div id='nav'>
    <ul>
        <li class = "detail"><a href = "#">Home</a>
        <li class='detail'><a href='viewcart.php'><span>Cart</span></a>
        <li class='detail'><a href='inventory.php'><span>Inventory</span></a>
        <li class='detail'><a href='profile.php'><span>Profile</span></a>
        <?php if (!isset($_SESSION['username'])) {?>
        <li class='detail'><a href='#'><span>Login</span></a>

            <form action="login.php" method="post">
                <ul>
                    <li><input type="text" name = "username " placeholder="Username"></input></li><br>
                    <li><input type="password" name = "password" placeholder="Password"></input></li><br>
                    <li><input type="submit"></input></li>
                </ul>
            </form>
        </li>
        <?php } else { ?>
        <li class='detail'><a href='logout.php'><span>Logout</span></a>
        <?php } ?>
    </ul>
</div>