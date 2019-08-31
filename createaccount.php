<?php 

// session_start();
include('./includes/db_connect.php');// connecting the db

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat Account</title>
    <link rel="stylesheet" href="./css/createaccount.css">
   
</head>
<body>


    <div class="register_main"> 
        
       
        <div class="register_main_content"> 
        
    
            <div class="register_main-pannel">
                <div class="system_reg">
                    <span class="account-title">Create Account</span>
                </div>
                <div class="inside_container">
                    <div class="for_finger">
                        <div class="imglogin">
                            <img src="./img/img-01.png" alt="IMG" name="fprint">
                        </div>
                        <div class="da_word">
                            <span class="img_word"> Register your Finger</span>
                        </div>
                    </div>
                
                
                    <div class="regist_form">

                        <form class="regi100-form"  method="post" action="createaccount.php">
  	                                <?php include('errors.php'); ?>
                            <div class="wrap-regi100 " data-validate="Name is required">
                                <span class="label-regi100"> First Name</span>
                                <input class="regi100" type="text" name="fname" placeholder="First Name...">
                                <span class="focus-regi100"></span>
                            </div>

                            <div class="wrap-regi100" data-validate="Username is required">
                                <span class="label-regi100">Other Name</span>
                                <input class="regi100" type="text" name="oname" placeholder="Other Name...">
                                <span class="focus-regi100"></span>
                            </div>

                            <div class="wrap-regi100" data-validate="Username is required">
                                <span class="label-regi100">Company Name</span>
                                <input class="regi100" type="text" name="cname" placeholder="Company Name...">
                                <span class="focus-regi100"></span>
                            </div>

                            <div class="wrap-regi100 " data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-regi100">Email</span>
                                <input class="regi100" type="text" name="ademail" placeholder="Email addess...">
                                <span class="focus-regi100"></span>
                            </div>



                            <div class="wrap-regi100 " data-validate = "Password is required">
                                <span class="label-regi100">Password</span>
                                <input class="regi100" type="text" name="adpass" placeholder="*************">
                                <span class="focus-regi100"></span>
                            </div>

                            <div class="wrap-regi100 " data-validate = "Confirm Password is required">
                                <span class="label-regi100">Confirm Password</span>
                                <input class="regi100" type="text" name="repeat-pass" placeholder="*************">
                                <span class="focus-regi100"></span>
                            </div>
                            <div class="wrap-regi100 " data-validate = "Repeat Password is required">
                                <span class="label-regi100">ZIP CODE</span>
                                <input class="regi100" type="text" name="zipcode" placeholder="*************">
                                <span class="focus-regi100"></span>
                            </div>

                            <div class="container-regi100-form-btn">
                                <div class="wrap-regi100-form-btn">
                                    <button class="regi100-form-btn" name="reg_admin" value="submit">
                                        Sign Up
                                    </button>
                                </div>

                                <div class="to_sign">
                                <a href="login.php" class="dis-block txt3 ">
                                    Sign in
                                    
                                </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
    
                
            </div>
    
        </div>

    </div> 
            
    
</body>
</html>