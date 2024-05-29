
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>ONLINE CAR RENTAL SYSTEM</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
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
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SAFFAR</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="#">SECURITY POLICY</a></li>
                    
                    <li><a href="contactus.html">CONTACT US</a></li>
                  <li> <button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content">
            <h1>Explore the freedom of <br><span>Car rental with <br> <b> SAFFAR </b> </span></h1>
            <p class="par">Whether you are planning a road trip,<br> need a reliable vehicle for a buisness trip, <br>
                or just want the convinience of having a car at your <br> 
                 disposal, we've got your covered. </p>
            <button class="cn"><a href="register.php">JOIN US</a></button>
            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter the Email Here">
                <input type="password" name="pass" placeholder="Enter the Password Here">
                <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
                <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</a></p>
                 <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div> 
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <footer>
    <div class="container">
        <div class="review-section">
            <h2>Customer Reviews</h2>
            <div class="review-box">
                <div class="review">
                    <p>"Great service! Will definitely rent from them again."</p>
                    <span>- John Doe</span>
                </div>
            </div>
            <div class="review-box">
                <div class="review">
                    <p>"Easy booking process and excellent customer support."</p>
                    <span>- Jane Smith</span>
                </div>
            </div>
            <!-- Add more review boxes as needed -->
        </div>
        <div class="location-section">
            <h2>Our Location</h2>
            <p>123 Main Street, Cityville, State, Zip Code</p>
        </div>
        <div class="copyright">
            <hr class="divider">
            <p>&copy; 2024 Car Rental Company. All rights reserved.</p>
        </div>
    </div>
    
  </footer>

</body>
</html>
