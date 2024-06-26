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
body{
    background-color:#dbdbdb;
    
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
    margin-top: 30px;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    margin-left: 40px;
    font-size: 20px;
    font-weight:600;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 20px;
    

}
.register{
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    margin: auto;

}

form#register{
    margin: 40px;
    margin-top: 10px;

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 10px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}


#back{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;

}
#back:hover{
    background-color:white;
    color:orange;
}

#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

#fam{
    color: #ff7200;
    
    font-size: 50px;
    padding-left: 20px;
    margin-top:-10px;
    text-align: center;
    letter-spacing: 2px;
    display: inline;
    margin-left: 250px;
}

.reg{
    width: 100%;
}



</style>






<button id="back"><a href="adminvehicle.php">Home</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Car</h2>
        <form id="register"  action="upload.php" method="POST" enctype="multipart/form-data">    
            <label>Car Name : </label>
            <br>
            <input type ="text" name="carname"
            id="name" placeholder="Enter Car Name" required>
            <br><br>

            <label>Fuel Type : </label>
            <br>
            <input type ="text" name="ftype"
            id="name" placeholder="Enter Fuel Type" required>
            <br><br>

            <label>Capacity : </label>
            <br>
            <input type="number" name="capacity" min="1"
            id="name" placeholder="Enter Capacity Of Car" required>
            <br><br>
            
            <label>Price : </label>
            <br>
            <input type="number" name="price" min="1"
            id="name" placeholder="Enter Price Of Car/day (in rupees)" required>
            <br><br>

            <label>Car Image : </label>
            <br>
            <input type="file" name="image" required>
           <br><br>

            <button type="submit" class="btnn"  value="ADD CAR" name="addcar">Add Car</button>

            
        </form>
        </div> 
    </div.main>
</body>
</html>