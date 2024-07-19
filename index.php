
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
    <link rel="stylesheet" href="css/cars.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
         <header id="header">
            <div class="logo-container">
                <a href="index.php">
                    <img src="images/safar_logo.jpg" alt="Website Logo" class="logo">
                </a>
            </div>
            <a class="active" href="#car-list-section">Cars</a>
            <a class="active" href="contact_3.html">Contact Us</a>
            <a class="active" href="aboutus.html ">About Us</a>
            <a class="active" href="security_p.html">Security Policy</a>
            <button class="btn_admin"><a href="adminlogin.php">Admin Login</a></button>
         </header> <hr>

        <div id="datetime" class="datetime"></div>
            
        
        </div>
        <div class="content">
            <h1>Explore the freedom of <br><span>Car rent with <br> <b> SAFAR </b> </span></h1> <br>
            <p class="par">Whether you are planning a road trip,<br> need a reliable vehicle for a buisness trip, <br>
                or just want the convinience of having a car at your <br> 
                disposal, we've got your covered. </p>
            <button class="cn"><a href="register.php"><b>JOIN US</b></a></button>

            <div class="form">
                <h3>Log in to SAFAR! </h3>
                <br>
                <hr>
                <br>
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
    <br>
    <hr>
    <br>
    <br>

    <section class="for booking" id="for booking">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Choose your location and <br> find your best car.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Select your pick-up date and time <br> to book your car.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p>We will deliver it directly to you.</p>
            </div>


        </div>

    </section> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>

    <section class="car-list-section" id="car-list-section">
        <h2>Best Services</h2>
        <h1>Explore Our Top Deals From Top Rated Dealers</h1>
        <div class="car-list">
            <div class="car-item">
                <img src="images/car 1.jpeg" alt="Maruti Suzuki Wagon R">
                <h3>Maruti Suzuki</h3>
                <h2>Wagon R</h2>
                <a href="wagnor.html" class="details-link">View Details</a>
                
            </div>
            <div class="car-item">
                <img src="images/car 2.jpeg" alt="Maruti Suzuki Baleno">
                <h3>Maruti Suzuki</h3>
                <h2>Baleno</h2>
                <a href="baleno.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/car 3.jpeg" alt="Tata Safari">
                <h3>Tata</h3>
                <h2>Safari</h2>
                <a href="safari.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/car 4.jpeg" alt="Mahindra Scorpio">
                <h3>Mahindra</h3>
                <h2>Scorpio</h2>
                <a href="scorpio.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/lambogini.jpeg" alt="Lambogini Huracane EVO">
                <h3>Lambogini</h3>
                <h2>Huracan EVO</h2>
                <a href="lambogini.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/porsche.jpeg" alt="Porsche 718 Boxter">
                <h3>Porsche</h3>
                <h2>718 Boxter</h2>
                <a href="porsche.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/swift.jpeg" alt="Tata Safari">
                <h3>Swift Maruti</h3>
                <h2>Maruti Swift XZI</h2>
                <a href="swift.html" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/mahindra tuv.jpeg" alt="Mahindra TUV">
                <h3>Mahindra</h3>
                <h2>Mahinfra TUV 300</h2>
                <a href="mahindratuv.html" class="details-link">View Details</a>
                 
            </div>
            <!-- <div class="car-item">
                <img src="images/car 1.jpeg" alt="Maruti Suzuki Wagon R">
                <h3>Maruti Suzuki</h3>
                <h2>Wagon R</h2>
                <a href="#" class="details-link">View Details</a>
                 
            </div>
            <div class="car-item">
                <img src="images/car 2.jpeg" alt="Maruti Suzuki Baleno">
                <h3>Maruti Suzuki</h3>
                <h2>Baleno</h2>
                <a href="#" class="details-link">View Details</a>
                 
            </div> -->
        </div>
    </section> 
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <section class="about us" id="about us">
        <div class="heading">
             
            <h1>Best Customer Experience</h1>
        </div>
        <br>
        <br>
        <div class="about-container">
            <div class="about-img">
                <img src="images/for about.jpg" alt="">
            </div>
            <div class="about-text">
                

                <p>SAFAR.COM Self Drive Cars is a self drive brand owned by ORIX, Japan’s second largest self drive car
                    rental company currently managing more than 63,000 cars in our fleet in Japan. With SAFAR.COM, we
                    endeavor to provide Indian users the Best in World Japanese service and technology at Indian prices.
                    SAFAR.COM is currently present in 16 Indian cities including Bangalore, Pune, Mumbai, Delhi-NCR,
                    Hyderabad, Chennai, Kolkata, Jaipur, Jodhpur, Indore, Chandigarh, Amritsar, Dehradun, Rishikesh,
                    Haridwar.and Udaipur.</p>
                <p>Now that we are here, you don’t need to look anywhere else for your need of self drive car rentals –
                    be it hatchbacks, sedans, safari, SUVs, MUVs or luxury cars.</p>
                </p>
                <p> Having your friends and family coming over for a long weekend? Bored of driving your own vehicle and
                    wanting to try your hands on a different car? Used to owning your own car but somehow stranded
                    without one? Peak hour rush in all modes of public transport horrifying you? Or just afraid of
                    running the risk of being fleeced by local autowallahs and taxiwallahs in a new town? Whatever your
                    reason may be, SAFAR.COM is your default choize to address all these reasons.</p>
                </p>
                <p>You can get your choize of self-drive car hand delivered at your doorstep, your office or at your
                    airport’s arrival terminal with our home and airport delivery options.</p>
                <p>So what are you waiting for? Time to book and ride!</p>
                <p></p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Whats Our Customer Say</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="images/person 1.jpg" alt="">
                </div>
                <h2>Alok Sharma</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Thankyou for providing unlimited kilometers. Our road trip with friends was so stress free and fun 
                    because we knew we did not have to pay anything over the money each of us.
                    <b>Ujjian, India</b>
                </p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="images/person 3.jpg" alt="">
                </div>
                <h2>Riya Sharma</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>I love the service. The cars were clean and the owner was polite. Thank you for the surprise gift in your car. Great! 
                    <b>Siliguri, India</b>
                </p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="images/person 2.jpg" alt="">
                </div>
                <h2>Hrittik Das</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Cheapest yet the most wonderful cars. I loved how much Safar provides best quality with lowest prices. Great
                    fun and amazing cars.  Hepls lot for us and others. Great job! Thanks
                    <b>Delhi, India</b>
                </p>
            </div>


        </div>
    </section>
    <br>
    <br>
    <br>

    
    
    
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

<script>
        function updateDateTime() {
            const now = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                weekday: 'long',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
            };
            document.getElementById('datetime').innerText = now.toLocaleString('en-US', options);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime(); // Initial call
    </script>

</html>
