<?php include_once('header.php');
include_once('functions.php'); 

// Check if the interviewer has credentials
// if (!isset($_SESSION["email"])){
//     header("Location: /Online_Shop_Demo/login.php");
// }

// Check if the staff is using the function isStaff() from 'functions.php'.
if (!isStaff($_SESSION["email"])){
    header("Location: /");
}


?>


<h1>收到的訂單</h1>
<h4>你的登入電郵是<?php echo $_SESSION["email"];?></h4>
<?php

// Version_1 (NO SQL)
// Geting the order of the customer 
// $orderData = file_get_contents("data.csv");
// $orders = str_getcsv($orderData, "\r\n");


$ordersQ = mysqli_query($dbconnection, "SELECT * FROM `order`;");

// $ordersQ command will fetch the data line by line.
while ($order = mysqli_fetch_assoc($ordersQ)){
    $gemQ = mysqli_query($dbconnection, "SELECT gem.Name FROM `gem` INNER JOIN `order` ON gem.Gem_ID = onlineshopdemo.order.Gem_ID WHERE gem.Gem_ID = {$order['Gem_ID']};");
    $gem = mysqli_fetch_assoc($gemQ);
    echo '<div class="order"><p>';
    echo '客戶稱呼 : '.$order['Client_Name'].'<br/>';
    echo '客戶電郵 : '.$order['Client_Email'].'<br/>';
    echo '想預訂 : '.$gem['Name'].' X '.$order['Quantity'].'件 <br/>';
    echo '下單時間 : '.$order['Order_Time'].'<br/>';
    echo '</p></div>';

}

//Show all orders
/*
foreach ($orders as $order){
    $singleOrder = explode(",", $order);
    
    echo '<div class="order"><p>';
    echo '客戶稱呼 : '.$singleOrder[1].'<br/>';
    echo '客戶電郵 : '.$singleOrder[2].'<br/>';
    echo '想預訂 : '.$gems[$singleOrder[0]-1]['name'].' X '.$singleOrder[3].'件 <br/>';
    echo '下單時間 : '.$singleOrder[4].'<br/>';
    echo '</p></div>';

    // echo "<pre>";
    // var_dump($singleOrder);
    // echo "<pre>";
    // echo $order. "<br>";

}
*/

?>

<?php include_once('footer.php');?>