<?php
    session_start();

    include("connection.php");
    include("functions.php");    

    

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Something was Posted
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $d_address = $_POST['d_address'];
        $cred_lim = $_POST['cred_lim'];

        if(!empty($email) && !empty($password)) {
            //save to database
            $user_id = random_num(20);
            $query  = "insert into users (user_id,email,password,fname,sname,d_address,cred_lim) values ('$user_id','$email','$password','$fname','$sname','$d_address','$cred_lim') ";

            mysqli_query($conn, $query);
            
            header("Location: customer_login.php");
            die;

        } else {
            echo "Please enter valid information";
        }
    }
            
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WiZoCu | Registration</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Permanent+Marker" />
        <link rel="stylesheet" href="css/customer_registration.css">
    </head>
    <body style="width: 100%; overflow-x: hidden; background-image: url('./img/registration_img.jpg'); background-size: cover; background-repeat: no-repeat;">
        <div class="row">
            <div class="col-lg-6 reg_side" style="background: linear-gradient(to bottom, #dfdfdf36, #dfdfdf31); "></div>
            <div class="col-lg-6"  style="background: linear-gradient(to bottom, #fffffff5, #fffffff5) ; height: 100%;" >
                <div class="container">                    
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-9" style="margin-top: 7%; margin-bottom: 17.8%;">                            
                            <h1 class="title">Sign Up</h1>
                            <p style="font-size: 20px; text-align: center; margin-left: -30%;">to</p>
                            <h1 class="logo">CoZuWi</h1>
                            <form action="customer_registration.php" method="post" class="reg_form">                        
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" />
                                    </div>
                                    <div class="col">
                                        <label for="sname">Second Name</label>
                                        <input type="text" class="form-control" id="sname" name="sname" />
                                    </div>
                                </div>
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" />
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                                <label for="d_address"> Delivery Address</label>
                                <input type="text" class="form-control" id="d_address" name="DeliveryAddress"/>
                                <label for="cred_lim"> Credit Limit</label>
                                <input type="number" class="form-control" id="cred_lim" name="CreditLimit" />                        
                                <input type="submit" class="btn sub_but" value="Register">                                                

                                <p style="text-align: center;">Already have an account? <a href="customer_login.php">Log in</a></p>
                            </form>            
                        </div>
                        <div class="col"></div>
                    </div>                    
                </div>
            </div>
        </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>    
</html>