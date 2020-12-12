<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="background">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 class="display-1">Welcome to NEO City</h1>
                <p class="alert alert-primary" style="width: 450px;">Where New Generation Technologies can be found...</p>
            </div>
            <div class="col-sm" id="registerform">
                <form action="register.php" method="post">
                    <h2>Welcome</h2>
                    <img src="login.png" alt="icon" id="register_icon">
                    <h2>Registration Form</h2>
                    <center>
                    <input type="text" id="input" name="fname" placeholder="Firstname" style="border-radius: 10px;width: 300px;" > 
                    <input type="text" id="input" name="lname" placeholder="Lastname" style="border-radius: 10px;width: 300px;">           
                    <input type="text" id="input" name="address" placeholder="Address" style="border-radius: 10px;width: 300px;">
                    <input type="text" id="input" name="emailadd" placeholder="Email Address" style="border-radius: 10px;width: 300px;">
                    <input type="text" id="input" name="confirmemail" placeholder="Confirm Email Address" style="border-radius: 10px;width: 300px;">
                    <input type="password" id="input" name="password" placeholder="Password" style="border-radius: 10px;width: 300px;">
                    <input type="password" id="input" name="confirmpass" placeholder="Confirm Password" style="border-radius: 10px;width: 300px;">
                    </center>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success" name="register_btn">Register</button>
                        </div>
                        <div class="col">
                            <a href="login.php" style="margin-left: 50%;"><i>Login</i></a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    <?php
    if (isset($_POST['register_btn'])){
        header("location: login.php");
    }
    
    ?>
</body>
</html>