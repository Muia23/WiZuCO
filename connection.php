<?php 

    $servername="localhost";
    $username="root";
    $password="Kenya@7777";
    $database_name="onlineshop";


    if(!$conn = mysqli_connect($servername, $username, $password, $database_name, "3307")){
        die('Connection Failed!');
    } 
    
    // else{
    //     $stmt = $conn->prepare("insert into customer(CreditLimit, DeliveryAddress)
    //     values(?,?)");
    //     $stmt->bind_param("is",$CreditLimit,$DeliveryAddress);
    //     $stmt->execute();
    //     echo '<script>window.location="home.php"</script>';
    //     $stmt->close();
    //     $conn->close();
    // }

?>
