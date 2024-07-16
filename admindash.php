<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    
    
}
body{
    background-color:#dbdbdb;
    
}
.body_m{
    width: 1440px;
    margin-left: 80px;
}
button{
    color: whitesmoke;
    background: #ff7200;
    height: 50px;
    width: 150px;
    border-radius: 10px;
}

.btn_admin:hover{
    background-color:orange;
    text-transform: uppercase;
    border-radius: 20px;
}
a{
    color: #0E46A3;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
}
.active:hover{
    text-transform:uppercase;
    color: #c96f09;
}
.logo {
    width: 200px;  
    height: 55px;
    border-radius: 20px;
    
}




.hai{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg");
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 40px;
    padding-left: 20px;
    float:left;
    

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

.content-table{
   border-collapse: collapse;
    
    font-size: 0.9em;
  
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 350px ;
    margin-top: 25px;
    width: 800px;
    height: 500px;
}
.content-table thead tr{
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.header{
    margin-top: 70px;
    margin-left: 650px;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}
</style>

<?php

require_once('connection.php');
$query="select *from feedback";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>





<div class="body_m">
    <div class="hai">
        <header>
            
            <div class="icon">
                <h2 class="logo">SAfAR</h2>
            </div>
            <a class="active" href="adminvehicle.php">Vehicle Add</a>
            <a class="active" href="adminusers.php">Users</a>
            <a class="active" href="admindash.php">Feedbacks</a>
            <a class="active" href="adminbook.php">Booking Request</a>
            <button class="btn_admin" onclick="logout()">Logout</a></button>
        </header> <hr>



        <div>
            <h1 class="header">FEEDBACKS</h1>
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>FEEDBACK_ID</th> 
                        <th>EMAIL</th>
                        <th>COMMENT</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FED_ID'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['COMMENT'];?></php></td>
                </tr>
               <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function logout() {
        alert("Are you sure you want to Logout? ADMIN?");
        window.location.href = "index.php";
    }
</script>
</html>