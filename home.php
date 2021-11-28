<?php
    session_start();
    include("connection.php");
    include("functions.php");    

    $user_data = check_login($conn);

    if(isset($_POST["add_to_cart"])){

        if(isset($_SESSION["shopping_cart"])){

            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'item_id'       => $_GET["id"],
                    'item_name'     => $_POST["hidden_name"],
                    'item_price'    => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],    
                    'item_image'    => $_POST["hidden_image"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;

            } else {
                // echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="home.php"</script>';
            }
        } else {
            $item_array = array(
                'item_id'       => $_GET["id"],
                'item_name'     => $_POST["hidden_name"],
                'item_price'    => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                'item_image'    => $_POST["hidden_image"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])) {
        if($_GET["action"] == "delete") {
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                if($values["item_id"] == $_GET["id"]) {
                    unset($_SESSION["shopping_cart"][$keys]);                   
                    echo '<script>window.location="home.php"</script>';
                }
            }
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WiZoCu | Home</title>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Permanent+Marker" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="css/home.scss">        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body  style="position:relative;">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand logo">CoZuWi</a>
              <div class="d-flex">                
                  <p style="color:white;">Welcome, <span style="color:orange; font-size:18px; font-weight:500; margin-right:10px;"><?php echo $user_data['fname']; ?></span></p>
                  <a href="logout.php"><button class="btn"  style="border: solid 1px #fda827; margin-right: 30px;" type=""><i class="fas fa-sign-out-alt" style="padding:4px 0; color: #fda827;font-size: 21px;"></i></button></a>
                <!-- <button class="btn" id="cart" onclick="carttoggle()" style="border: solid 1px #fda827; margin-right: 30px;" type=""><i class="fas fa-shopping-cart" style="padding:4px 0; color: #fda827;font-size: 21px;"></i><sup style="background:#f7c06d; padding: 2px 4px 2px 2px;border-radius: 50%; border: solid 1px white;">10</sup></button> -->
              </div>

            </div>
        </nav>
        <br>              
        <div class="container">            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" ><!-- row-cols-md-2-->
                <?php
                    $query = "SELECT * FROM product ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                        
                ?>
                    <div class="col">
                        <form method="post" action="home.php?action=add&id=<?php echo $row["id"]; ?>" class="card prod_card">                            
                            <div class="img_holder" style="background-image: linear-gradient(to bottom, #ffffff6e, #ffffffe5),url(./img/item_background.jpg);">
                                <div style="background-image:url(./img/<?php echo $row['imgname']; ?>)" class="card-img-top prod_img" alt="..."></div>
                                <input type="hidden" name="hidden_image" value="<?php echo $row['imgname']; ?>" />
                            </div>                                                 
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['prodname'] ?></h5>                        
                                <input type="hidden" name="hidden_name" value="<?php echo $row['prodname']; ?>" />
                                <hr>                        
                                <div class="container">                                                        
                                    <div class="row">                                
                                        <div class="col-sm-5">
                                            <p>Quantity:</p>
                                        </div>
                                        <div class="col-sm-7 quantity">                                    
                                            <button class="btn btn_minus minus-btn<?php echo $row['id'] ?>" type="button"><span>-</span></button>
                                            <input type="text" name="quantity" id="quantity<?php echo $row['id'] ?>" value="<?php echo $row['quantiy'] ?>"><span style="padding: 0 4px 0 0; color: gray;">Kg</span>
                                            <button class="btn btn_plus plus-btn<?php echo $row['id'] ?>" type="button"><span>+</span></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p>Amount:</p>
                                        </div>
                                        <div class="col-sm-7 amount">
                                            <p class="total-price">
                                                <span class="currency">Ksh</span>
                                                <span id="price<?php echo $row['id'] ?>"><?php echo $row['amount'] ?></span>
                                                <input type="hidden" name="hidden_price" value="<?php echo $row['amount']; ?>" />
                                            </p>
                                        </div>
                                    </div>
                                </div>                    
                            </div>
                            <div class="card-footer" style="background-image: linear-gradient(to bottom, #2e2e2e42, #2e2e2e42),url(./img/item_background.jpg);">
                                <input type="submit" class="btn add_cart" name="add_to_cart"  value="Add to Cart" />
                            </div>
                        </form>
                    </div>
                <?php
                        }
                    }
                ?>                            
            </div>
            <div class="container">
                <hr>
                <div class="row">
                <div class="col"></div>
                <div class="col-md-8">
                    <form action="checkout.php" method="post" class="shopping-cart cart" id="cart">
                        <h4 class="shopping-cart-title">Cart</h4>
                        <hr/>                        
                        <!-- <div id="cart-title"></div> -->
                        <?php
                            if(!empty($_SESSION["shopping_cart"])){
                                $total = 0;
                                foreach($_SESSION["shopping_cart"] as $keys => $values){
                        ?>
                        <div class="row">                            
                            <div class="col-sm-4">                                
                                <img src="./img/<?php echo $values['item_image']; ?>" style="max-height:50px; max-width:50px; display:inline-block;"/>                                
                                <h5 style="display:inline-block; color:#d8621de5;"><?php echo $values["item_name"]; ?></h5>                                
                            </div>
                            <div class="col-sm-1">
                                <p><?php echo $values['item_quantity']; ?></p>                                
                            </div>
                            <div class="col-sm-2">
                                <p>Ksh <?php echo $values["item_price"]; ?></p>                                
                            </div>
                            <div class="col-sm-3">
                                <p><?php echo number_format($values["item_quantity"]* $values["item_price"],  2); ?></p>                                
                            </div>
                            <div class="col-sm-2">
                                <a href="home.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                            </div>
                        </div>
                        <hr>
                        <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }              
                        ?>                        
                        <div class="row">                            
                            <div class="col">                                
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h5>Total</h5>
                                    </div>
                                    <div class="col">
                                        <p>Ksh <span style="font-size:25px; color:#d8621de5;"><?php echo number_format($total, 2); ?></span></p>                                        
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                        <?php
                            } 
                        ?>
                        <input type="hidden" name="item_id" value="<?php echo $values["item_id"]; ?>" />
                        <input type="hidden" name="quantity" value="<?php echo $values["item_quantity"]; ?>" />
                        <input type="hidden" name="customer_name" value="<?php echo $user_data['fname']; ?>" />
                        <input type="hidden" name="DeliveryAddress" value="<?php echo $user_data['d_address']; ?>" />
                        <input type="hidden" name="cred_lim" value="<?php echo $user_data['cred_lim']; ?>" />
                        <input type="hidden" name="prodname" value="<?php echo $values["item_name"]; ?>" />                        
                    <hr>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <input type="submit" class="btn btn-danger" value="Proceed to Checkout" >
                        </div>
                        <div class="col"></div>
                    </div>
                    </form>                                                        
                </div>  
                <div class="col"></div>
                </div>                                
            </div>
            <br>

        </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="./js/home.js"></script>                
    </body>
</html>
