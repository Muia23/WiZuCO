<?php
    session_start();

    include("connection.php");
    include("functions.php");    

    if($_SERVER['REQUEST_METHOD'] == "POST") {        
        $prodname = $_POST['prodname'];
        $quantity = $_POST['quantity'];
        $amount = $_POST['amount'];


        $query  = "insert into product (prodname,quantity,amount) values ('$prodname','$quantity','$amount') ";

        mysqli_query($conn, $query);
            
        header("Location: additem.php");
    }
?>
<!DOCTYPE html>
<htm>
    <head>
    </head>
    <body>
        <form action="additem.php" method="post">
            <input type="text" class="form-control" name="prodname">
            <input type="number" class="form-control" name="quantity">
            <input type="number" class="form-control" name="amount">
            <br>
            <input type="submit" class="btn sub_but" value="Add Item to shop">                                                
        </form>
    </body>
</html>