<?php
    include("connection.php");

if(isset($_POST["fname"]))
{
    $name=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $duplication=mysqli_query($con,"SELECT * FROM register WHERE email='$email'");
    if(mysqli_num_rows($duplication)>0){
        echo
        "<script>alert('Email Id Already Exist')</script>";
        
    }else {
        $querry="INSERT INTO register(f_name,l_name,email,password)VALUES('$name','$lname','$email','$password')";
        // echo $querry;
        mysqli_query($con,$querry);
        echo
        "<script>alert('Registration successfull')</script>";

}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
        .container{
            width:370px;
            height: auto;  
            justify-content: center;
            background-color: #fff;
            border-radius: 8px;
           
            }
            .con1{
                background-image:linear-gradient(rgb(121, 0, 234),rgb(184, 125, 240));
                padding: 30px;
                width: 340px;
                border-radius: 10px;
                margin-top: 80px;
            }
      </style>
</head>
<body>
    <div class="container-fluid" >
        <div class="container con1">
    <div class="container border border-dark pe-5 mt-5" id="register" style="display:none;" >
    <a href="index.php" style="margin-left:325px;">❌</a>
        <h2 class="text-center p-3 fw-lighter text-primary" style="font-family:sans-serif;">Register</h2>
        <form action="" method="post" id="fm">
            <label class="form-label" for="fname">First Name</label>
            <input type="text" class="form-control mb-3" id="fname" name="fname">

            <label class="form-label" for="lname">Last Name</label>
            <input type="text" class="form-control  mb-3" id="lname" name="lname">

            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control  mb-3" id="email" name="email" required>

            <label class="form-label" for="pass">password</label>
            <input type="password" class="form-control  mb-3" id="pass" name="password" required>

            <button class="btn btn-primary text-center" type="submit" id="rgbtn">Register</button>
             <p class="mt-2 text-center" >Already Registered <a href="" id="lg"> Login</a></p>
        </form>
    </div>

    <div class="container border border-dark ps-5 pe-5  mt-5" id="login" >
    <a href="index.php" style="margin-left:290px;">❌</a>
        <h2 class="text-center p-3 fw-lighter text-primary" style="font-family:sans-serif;">Login</h2>
       
        <form action="do_reg.php" method="post">
        
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control  mb-3" id="email" name="email" required>

            <label class="form-label" for="pass">password</label>
            <input type="password" class="form-control  mb-3" id="pass" name="password" required>

            <button class="btn btn-primary text-center" type="submit">Login</button>
             <p class="mt-2 text-center" >If Not Registered<a href="" id="rg"> Register</a></p>
        </form>
    </div>
</div>

</div>



<script>
    let reg=document.getElementById("register");
    let log=document.getElementById("login");
    let lg=document.getElementById("lg");
    let rg=document.getElementById("rg");

    lg.addEventListener("click",function(e){
        e.preventDefault();
        reg.style.display="none";
        log.style.display="block";
    });

    rg.addEventListener("click",function(e){
        e.preventDefault();
        reg.style.display="block";
        log.style.display="none";
    });
   
    

</script>
</body>
</html>