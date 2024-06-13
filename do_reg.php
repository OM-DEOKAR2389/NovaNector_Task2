<?php
if(isset($_POST["email"])){
    $em=$_POST["email"];
    $ps=$_POST["password"];

    $q="SELECT * FROM register WHERE(email='$em') and password='$ps'";
    include("connection.php");
    $result=mysqli_query($con,$q);
    if($row=mysqli_fetch_assoc($result))
    {
        session_start();
        
        $_SESSION['email']=$row['email'];
       
     
        
       echo
        "<script>
        alert('Login Successful');
        window.location.href='index.php';
        </script>";
    }else
    {
        echo
        "<script>
        alert('User not Registerd');
        window.location.href='login.php';
        </script>";
    }

    $em="omdeokar3106@gmail.com";
    $ps="909680";
   
    if($em==$em){
        echo
        "<script>
        alert('Login Successful');
        window.location.href='admin.php';
        </script>";
    }
}


?>