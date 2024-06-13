<?php
if(isset($_POST["name"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $person=$_POST["no_person"];
  $state=$_POST["state"];
  $pin=$_POST["pin"];
  $card=$_POST["card"];
  $card_no=$_POST["card_no"];
  $amount=$_POST["expm"];
  $expiry=$_POST["expy"];
  $cvv=$_POST["cvv"];

include("connection.php");

$q="INSERT INTO booking(name,email,address,no_person,state,pin,card,card_no,amount,expiry,cvv)VALUES('$name','$email','$address','$person','$state','$pin','$card','$card_no','$amount','$expiry','$cvv')";
// echo $q;
mysqli_query($con,$q);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        *{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}
body{
  background-image:linear-gradient(rgb(121, 0, 234),rgb(184, 125, 240));
   

}
.title1{
  width: 150px;
  height: 2px;
  background-color:  #f0282f;
  margin-left: 570px;

}
h2{
  text-align: center;
 padding-top: 20px;
 font-size: 30px;
 background-image:linear-gradient(rgb(121, 0, 234),rgb(184, 125, 240));

}
h2 span{
  color:  #f0282f;
  border-bottom: 3px solid black;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:55px;
  min-height: 100vh;
  background-image:linear-gradient(rgb(121, 0, 234),rgb(184, 125, 240));

}
.container img{
    margin-top: -56px;
}

.container form{
  margin-top: -60px;
  padding:21px;
  width:1200px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #f0282f;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background:rgb(121, 0, 234);
}

    </style>

</head>
<body>
 
 
<div class="container">

  <!-- <div class="img">
    <img src="flight.jpg" alt="" width="500px" height="555px">
</div> -->

    <form action="" method="post">
      
        <div class="row">

            <div class="col">

                <h3 class="title">Booking Details</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Full Address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>Number of persons :</span>
                    <input type="number" placeholder="" name="no_person" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Maharashtra" name="state" required>
                    </div>
                    <div class="inputBox">
                        <span>Pin code :</span>
                        <input type="text" placeholder="123 456" name="pin" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src= "card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name on card :</span>
                    <input type="text" placeholder="Your name on card" name="card" required>
                </div>
                <div class="inputBox">
                    <span>Card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="card_no" required>
                </div>
                <div class="inputBox">
                    <span>Booking Amount :</span>
                    <input type="text" placeholder="Above Rs 30,000" name="expm" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp year :</span>
                        <input type="number" placeholder="2022" name="expy" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" name="cvv" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="BOOKING CONFIRM" class="submit-btn">

    </form>

</div>    
    
</body>
</html>