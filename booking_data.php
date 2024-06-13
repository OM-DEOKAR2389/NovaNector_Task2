<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <style>
        th{
            border-left:1px solid lightgray;
            border-bottom:1px solid lightgray;

        }
        td{
            border-left:1px solid lightgray;
            border-bottom:1px solid lightgray;
        }
        .row{
            width:100%;
        }
     </style>
</head>
<body>
    <div class="container-fluid ms-3">
     <h2 class="text-center mb-4">Booking Details</h2>
     <div class="row text-center">
     
    <table class="text-center border">

      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>NO Of Persons</th>
        <th>state</th>
        <th>Pin</th>
        <th>Card</th>
        <th>Card_No</th>
        <th>Amount</th>
        <th>Expiry</th>
        <th>Cvv</th>
      </tr>
      <?php
      include("connection.php");
      $q="SELECT * FROM booking";

      $result=mysqli_query($con,$q);
      while($row=mysqli_fetch_assoc($result))
      { ?>
          <tr>
            <td><?php echo $row['name'];?></td>    
             <td><?php echo $row['email'];?></td>
             <td><?php echo $row['address'];?></td>
             <td><?php echo $row['no_person'];?></td>
             <td><?php echo $row['state'];?></td>
             <td><?php echo $row['pin'];?></td>
             <td><?php echo $row['card'];?></td>
             <td><?php echo $row['card_no'];?></td>
             <td><?php echo $row['amount'];?></td>
             <td><?php echo $row['expiry'];?></td>
             <td><?php echo $row['cvv'];?></td>
      </td>
      <?php }
      ?>

    </table>
    </div>
    </div>
    </div>
</body>
</html>