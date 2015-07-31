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
        <!-- <li class = "detail"><a href = "#">Home</a> -->
        <li class='detail'><a href='inventory.php'><span>Inventory</span></a>
        <li class='detail'><a href='viewcart.php'><span>Cart</span></a>
        <li class='detail'><a href='profile.php'><span>Profile</span></a>
        <?php if (!isset($_SESSION['username'])) {?>
        <li class='detail'><a href='login.php'><span>Login</span></a>


        </li>
        <?php } else { ?>
        <li class='detail'><a href='logout.php'><span>Logout</span></a>
        <?php } ?>

        <?php if ($currentPage != 'register' && !isset($_SESSION['username'])) { ?>
        <li class='detail'><a href='register.php'><span>Register</span></a>
        <?php }?>


    </ul>
</div>