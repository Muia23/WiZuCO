<?php
    session_start();

    include("connection.php");
    include("functions.php");    

    

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Something was Posted
        $item_id = $_POST['item_id'];        
        $quantity = $_POST['quantity']; 
        $customer_name = $_POST['customer_name'];        
        $DeliveryAddress = $_POST['DeliveryAddress'];
        $cred_lim = $_POST['cred_lim'];
        $prodname = $_POST['prodname'];

              
        $query  = "insert into orderitem (item_id,quantity,cred_lim,prodname,customer_name,DeliveryAddress) values ('$item_id','$quantity','$customer_name','$DeliveryAddress','$cred_lim','$prodname') ";

        mysqli_query($conn, $query);            
        header("Location: home.php");
    
    }
            
?>
