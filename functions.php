<?php
include_once('dbconnect.php'); // include_once() => Prevent including a file more than once
// include('dbconnect.php');
// ob_start();
$op = NULL;
if(isset($_GET['op'])){ 
    $op = $_GET['op'];
}

if ($op=='createOrder'){
    createOrder();
}elseif ($op=='checkLogin'){
    checkLogin($_POST['email'], $_POST['password']);
}elseif ($op=='logout'){
    echo logout();
}

function isStaff(){
    return isset($_SESSION['email']); // isset() => Check if the variable $_SESSION['email'] exists
}

function createOrder(){
    echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>";

    // //Store order into Mysql database
    global $dbconnection;


    $order_query = "INSERT INTO `onlineshopdemo`.`order`
                     VALUES (
                        NULL, 
                        '".mysqli_real_escape_string($dbconnection, $_POST['name'])."',
                        '".mysqli_real_escape_string($dbconnection, $_POST['email'])."', 
                        {$_POST['quantity']}, 
                        '".date('Y-m-d H:i:s')."', 
                        {$_POST['gem_id']});";


    $checkQuantity_query = "SELECT `Remaining` FROM `onlineshopdemo`.`gem` 
                            WHERE `Gem_ID` = {$_POST['gem_id']} AND 
                            `Remaining` >= {$_POST['quantity']};";


    $update_query = "UPDATE `onlineshopdemo`.`gem` 
                    SET `Remaining` = `Remaining`- {$_POST['quantity']} 
                    WHERE `Gem_ID` = {$_POST['gem_id']};";


    // First check the quantity in Remaining
    $result = mysqli_query($dbconnection, $checkQuantity_query);


    if (mysqli_num_rows($result) > 0) {
        // Order insertion will only be performed if there is sufficient inventory.                    
        if (mysqli_query($dbconnection, $order_query)){
            // Deduct the quantity from the stock
            mysqli_query($dbconnection, $update_query);
            header("Location: /Online_Shop_Demo/order-completed.php");
        }else{
            echo "Error: " . mysqli_error($dbconnection);
            header("Location: /Online_Shop_Demo/order-fail.php");
        }
    }else{
        echo "Error: " . mysqli_error($dbconnection);
        header("Location: /Online_Shop_Demo/order-fail.php");
        exit;
    }


    // Version_1
    // //Store Order
    // $myfile = fopen("data.csv", "a") or die("Unable to open file!!");
    // $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    // fwrite($myfile, $data);
    // fclose($myfile);


    // //Change page into order-completed.php
    // header("Location: /Online_Shop_Demo/order-completed.php");
}

function checkLogin($email, $password){
    // $staffEmail = "staff01@gmail.com";
    // $staffPassword = "password";

    // //Get staff info from database
    global $dbconnection;
    $staffQ = mysqli_query($dbconnection, "SELECT * FROM `staff` WHERE `Email` = '".$email."'");

    $staff = mysqli_fetch_assoc($staffQ); // Geting database data using an associative array.



    if ($email == $staff['Email'] and password_verify($password, $staff['Password'])){
        //This is a staff
        //Staff Accreditation
        session_start();
        $_SESSION["email"] = $email;
        header("Location: /Online_Shop_Demo/allOrders.php");
    }else{
        header("Location: /Online_Shop_Demo/login.php");
    }
}

function logout(){
    session_start();
    session_destroy(); //Destroy session
    header("Location: /");
}
?>