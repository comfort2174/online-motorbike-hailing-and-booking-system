<?php
session_start();
require 'db_connection.php';
require 'insert_driver.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign as driver</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container fluid">
            <div class="container-fluid padding">
                <nav class="navbar navbar-expand-md navbar-light bg-light ">
                    <div class="col-12">
                            <div class="header"><a href="home.php"><p><h1>Home</h1></p></a></div>
                        </div>
                    </div>
                </div>
             </div>
           </nav>
           <hr>

           <!--main section-->
           <form class="box" action="index.html" method="post">
            
            <h1>Register</h1>
            <p class="mb-0">Register As A Safe Nduthi Guy</p>
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" id="username" name="username" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter email" id="user_email" name="user_email" required>


                <label for="id_number"><b>id number</b></label>
                <input type="text" placeholder="Enter your id number" id="id_number" name="id_number" required>

        
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter password" id="user_password" name="user_password" required>
        
                <button type="submit">Login</button>
            </div>
           
          
        </div>
        <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
   <div class="container" style="background-color:#f1f1f1">
        <a href="index.php"><button type="button" class="Regbtn">Login</button></a>
    </div>     
    
          </form>
</body>
</html>