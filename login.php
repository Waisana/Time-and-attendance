<?php


    include('./includes/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <title>Login </title>
</head>
<body>

    <div class="the_login_main"> 
            
        
        <div class="login_main_content">
            
        
            <div class="lmain-pannel">
                <div class="system_log">
                    <span class="login100-form-title">System Login</span>
                </div>
                

                <div class="imglogin">
                    <img src="./img/img-01.png" alt="IMG">
                </div>
                
                <hr>
                <div class="login_form">

                    <form class="login100-form " action="login.php" method="post">
                            <?php include('errors.php'); ?>
                        
                        <div class="wrap-input ">
                            <input class="input100" type="text" name="useremail" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                    <i class="ionicons ion-email"></i>
                                    
                            </span>
                        </div>

                        <div class="wrap-input" >
                            <input class="input1001 downer_one" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="ion-ios-locked" ></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="login_user" value="logIn" >
                                Login
                            </button>
                        </div>

                        <div class="text-center txt">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt1" href="#">
                                Username / Password?
                            </a>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt1" href="createaccount.php">
                                Create your Account
                            </a>
                        </div>
                    </form>

                </div>
    
                
            </div>
        
        </div>

        <div class="taat">
            <span class="taat_upper"> <strong>Time and Attendence</strong>  </span><br>
            <span class="taat_lower">System</span>

        </div> 

    </div>

    
    
</body>
</html>