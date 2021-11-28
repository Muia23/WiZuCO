<?php
    session_start();

    include("connection.php");
    include("functions.php");        

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Something was Posted
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)) {
            //read from database           
            $query  = " select * from users where email = '$email' limit 1 ";


            $result = mysqli_query($conn, $query);

            if($result) {
                if($result && mysqli_num_rows($result) > 0) {
                
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password) {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: home.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password";            

        } else {
            echo "Wrong username or password";
        }
    }
            
?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>WiZoCu | Log in</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Permanent+Marker" />
            <link rel="stylesheet" href="css/customer_login.css">
        </head>
        <body style="background-image: linear-gradient(to bottom, #3d3d3d77, #3d3d3d77),url(./img/login_img.jpg); background-size: auto; overflow-x: hidden;">
            <div class="row container-fluid" style="background:#ffffffee; margin-top: 10%;">
                <div class="col"></div>
                <div class="col-md-6" style="padding: 5px;">
                    <h5 style="padding: 10px;">Welcome to</h5>
                    <h1 class="logo">CoZuWi</h1>                
                    <div class="container" style="text-align: center;">
                        <form action="" method="post" class="login_form" >
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Enter User Email"/>
                            <br>
                            <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter your Password" />
                            <br>
                            <input type="submit" class="btn sub_but" value="Login">                                                
                            <br><br>                        
                            <p>Don't have an account? <a href="customer_registration.php">Register here</a></p>
                            <br>
                        </form>
                    </div>
                </div>
                <div class="col"></div>            
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
    </html>