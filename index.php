<?php include_once('header.php');?>
<h1>寶石預訂</h1>
<h2><?php echo date("n");?>月優惠</h2>

<div class="flex-grid">

<?php
// Show product detail from database
$gemQ = mysqli_query($dbconnection, "SELECT * FROM `gem`;");

// mysqli_fetch_assoc($gemQ) get data
while ($gem = mysqli_fetch_assoc($gemQ)){
    echo '<div class="col">
    <img src="/Online_Shop_Demo/images/'.$gem['Image'].'" />
    <p>
    名稱：'.$gem['Name'].'<br>
    價格：$'.$gem['Price'].'<br>
    <a href="/Online_Shop_Demo/order.php?gem_id='.$gem['Gem_ID'].'" class="buyBtn">預訂'.$gem['Name'].'</a><br>
    </p></div>';
}


//  顯示貨品訊息
// echo var_dump($gems);
// foreach ($gems as $key => $gem){

//     echo '<div class="col">
//     <img src="/Online_Shop_Demo/images/'.$gem['image'].'" />
//     <p>
//     名稱：'.$gem['name'].'<br>
//     價格：$'.$gem['price'].'<br>
//     <a href="/Online_Shop_Demo/order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預訂'.$gem['name'].'</a><br>
//     </div>';
// }


// foreach ($gems as $value) {
//     echo '<img src="/Online_Shop_Demo/images/'.$value['image'].'" />';
// }


?>
</div>
<?php include_once('footer.php');?>

