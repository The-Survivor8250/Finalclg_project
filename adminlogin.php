<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- <link rel="stylesheet" href="css/adlog.css">     -->
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>
<style>
*{
    margin: 0;
    padding:0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body{
    width: 70vw;
    background-image: url("images/adminbg2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 80vh;
}

.form{
    width: 360px;
    height: 400px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top:180px;
    left:900px;
    border-radius: 10px;
    padding: 20px;
    

}

.form p{
    width:90%;
    font-family: sans-serif;
    text-align: center;
    color: orange;
    font-size: 22px;
    font-weight:600;
    background-color: white;
    border-radius: 10px;
    margin-top: 20px;
    margin-left:10px;
    padding: 8px;

}

 .h{
    width: 340px;
    height: 50px;
    background: transparent;
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:2px solid orange;
    color:orange;
    font-weight:600;
    font-size: 16px;
    letter-spacing: 1px;
    margin-top: 40px;
    margin-left:5px;
}
.h:focus{
    outline: none;
}

::placeholder{
    color: Orange;
}

button{
    width: 210px;
    height: 40px;   
    background: #ff7200;
    border:none;
    font-size: 18px;
    font-weight:600;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    text-decoration:none;
  
}
.bttn{
    margin-left:1350px;
    color:white;
}
.bttn a{
    text-decoration: none;
    
}
    
.bttn:hover{
    color:orange;
    background-color:white;
    
}

.btnn{
    margin-top:20px;
    margin-left: 80px;
    border-radius: 30px;
}
.btnn:hover{
    background: #fff;
    color:#ff7200;
}

 

.form .link{
     
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    color: #fff;
}

.form .link a{
    text-decoration: none;
    color:#ff7200
}



.helloadmin{
    width: 1500px;
    height: 100%;
    margin-left:350px;
    text-align: center;
}
.helloadmin h1{
    font-size: 50px;
    color: white;
}

.logo-container{
    margin-top: 20px;
    margin-left: 20px;
    cursor: pointer;
    border-radius: 10px;
    
}

 
</style>



<?php
    require_once('connection.php');
    if(isset($_POST['adlog'])){
        $id=$_POST['adid'];
        $pass=$_POST['adpass'];
        
        
        if(empty($id)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from admin where ADMIN_ID='$id'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['ADMIN_PASSWORD'];
                if($pass  == $db_password)
                {
                    
                    // session_start();
                    // $_SESSION['email'] = $email;
                    echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                    header("location: admindash.php");
                    
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



<header>
            <div class="logo-container">
                <a href="index.php">
                    <img src="images/safar_logo r.jpg  " alt="Website Logo" class="logo">
                </a>
            </div>

        <button class="bttn"><a href="index.php">Go To Home</a></button>    
</header>    
    <div class="helloadmin">
        <h1>Hello Admin!</h1>
    </div>

    
    <form class="form" method="POST">
        <p>Admin Login</p>
        <input class="h" type="text" name="adid" placeholder="Enter admin id">
        <input class="h" type="password" name="adpass" placeholder="Enter admin password">
        <button type="submit" class="btnn" value="LOGIN" name="adlog"> Login </button>
    </form>
    
    

</body>
</html>