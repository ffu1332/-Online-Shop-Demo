<?php 
session_start(); // must be write it in first, before call $_SESSION
include_once('stock.php');
include_once('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>寶石預訂網站</title>
    <link rel="stylesheet" href= "/Online_Shop_Demo/css/css.css">
</head>
<body>
    <nav>
    <ul class="clientMenu">
        <li><a href="/">首頁</a></li>
        <li><a href="/Online_Shop_Demo/about.php">關於</a></li>
    </ul>
    <ul class="staffMenu">
        <?php
        if ($_SESSION)
        {
            echo '
            <li><a href="/Online_Shop_Demo/allOrders.php">所有訂單</a></li>
            <li><a href="/Online_Shop_Demo/functions.php?op=logout">登出</a></li>';
        }else{
            echo '<li><a href="/Online_Shop_Demo/login.php">登入</a></li>';
        }
        ?>

    </ul>
    </nav>
</body>