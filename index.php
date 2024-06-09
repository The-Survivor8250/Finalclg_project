
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SAFAR</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
        
        setTimeout("preventBack()", 0);
        
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }

            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }
?>

<div class="body_m">
<div class="hai">
    <div  class="main">
        <header>
            <div class="logo-container">
                <a href="index.php">
                    <img src="images/safar_logo.jpg" alt="Website Logo" class="logo">
                </a>
            </div>
            <a class="active" href="contact_3.html">Contact Us</a>
            <a class="active" href="aboutus.html ">About Us</a>
            <a class="active" href="security_p.html">Security Policy</a>
            <button class="btn_admin"><a href="adminlogin.php">Admin Login</a></button>
        </header> <hr>
            
        
        </div>
        <div class="content">
            <h1>Explore the freedom of <br><span>Car rent with <br> <b> SAFAR </b> </span></h1> <br>
            <p class="par">Whether you are planning a road trip,<br> need a reliable vehicle for a buisness trip, <br>
                or just want the convinience of having a car at your <br> 
                disposal, we've got your covered. </p>
            <button class="cn"><a href="register.php"><b>JOIN US</b></a></button>

            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pass" placeholder="Password">
                <button class="btnn" type="submit" value="Login" name="login">Login</button>
                
                </form>
                <p class="link">Don't have an account <a  href="register.php">Sign up</a></p>
                
            </div>
        </div>
    </div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <footer >
            <div class="bottom">
                <h3>SAFAR</h3> 
                <p>SAFAR self drive cars is a self drive brand owned by SHERRON, India's second largest self drive car rental company</p> <br>
                    <ul class="social-media">
                        <a href="https://www.facebook.com/safar" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/safar" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://www.instagram.com/safar" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </ul>
                                        
                
            </div> 
            
                <span class="copyright" >Copyright &copy; SAFAR 2024. All rights reserved. </span>
        
            <div class="bottom2">
                <h3>Reach Us:</h3>
                
                <address>
                    <a href="https://www.google.com/maps/place/Your+Location" target="_blank"><i class="fas fa-map-marker-alt"></i> SHERRON Auto Infrastructure Services Limited.
                    Plot No-87 , Marol Co-Operative Industrial Estate, Marol Maroshi Road, Andheri(E), Mumbai, Maharashtra 400059</a><br> <br>
                    <a href="tel:+91 99 3330 1920"><i class="fas fa-phone"></i> +91 99 3330 1920</a> <br> <br>
                    <a href="mailto:carrental@sherronindia.com"><i class="fas fa-envelope"></i> carrental@sherronindia.com</a>
                </address>
            </div>
            
        
            
            
        </footer>
    </div>    

</body>
</html>
