<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login and Registration</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
                    
       <div class=" login-page">
                <div class="form">
                    <form class="register-form">
                        <h1 style="color:#1ed809">Sign Up</h1>
                        <input type="text" name="name" placeholder="Enter Full Name"  />
                        <input type="text" name="email" placeholder="Enter email ID" />
                        <input type="password" name="password1" placeholder="Enter password" />
                        <input type="password" name="Password2" placeholder="ReEnter password" />
                        <input type="text" name="country" placeholder="Country" />
                        <button><a href="Login.html">Create</a></button>
                        <p class="message">Already Registered? <a href="#">Login</a> </p>
                    </form>

                    <form class="login-form">
                        <h1 style="color:#1ed809">Login</h1>
                        <input type="text" placeholder="Email ID">
                        <input type="password" placeholder="password">
                        <button><a href="Home.html">Login</a></button>
                        <p class="message">Not Registered? <a href="#">Sign Up</a></p>
                        
                </div>
                 </div>

            <script src='https://code.jquery.com/jquery-3.3.1.min.js'>
            </script>

            <script>
                $('.message a').click(function () {
                    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
                });
            </script>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die()
?>