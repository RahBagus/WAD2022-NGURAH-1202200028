<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Booking</title>
</head>
<body>
    
    <header class="mb-3">
        
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-center">
            <a href="ngurah_index.php" class="navbar-brand d-flex align-items-center">
                Home
            </a>
            <a href="ngurah_My-booking.php" class="navbar-brand d-flex align-items-center">
                My Booking
            </a>
            </div>
        </div>

    </header>

    <div class="text-center">


    <?php
    
    $price = $_POST['price'];
    $transmision = $_POST['transmision'];
    $cc = $_POST['cc'];
    $type = $_POST['type'];
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $protocol = $_POST['protocol'];
    $duration = $_POST['duration'];
    $driver = $_POST['driver'];
    $fuel = $_POST['fuel'];
    
    ?>

        <h3>Booking Detail</h3>
        <hr class="mb-3">
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Order No.</th>
      <th scope="col">Name</th>
      <th scope="col">Car Type</th>
      <th scope="col">Price</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Duration (Days) </th>
      <th scope="col">Additional </th>
      <th scope="col">Total Price </th>
    
      
      
    </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
        <th scope="row"><?php echo(rand() . "<br>"); ?></th>
        <td><?php echo $fullname?></td>
        <td><?php echo $type?></td>
        <td>Rp.<?php echo $price?></td>
        <td><?php echo $phone?></td>
        <td><?php echo $email?></td>
        <td><?php echo $date?></td>
        <td><?php echo $time?></td>
        <td><?php echo $duration?></td>
        <td>
            Rp.<?php echo $protocol?>
            <br>
            Rp.<?php echo $driver?>
            <br>
            Rp.<?php echo $fuel?>
        </td>
        <td>Rp.<?php echo $price + $driver + $protocol + $fuel ?></td>

    </tr>
  </tbody>
</table>
    </div>

<footer class="text-muted">
    <div class="container text-center">
        <p>@Ngurah_1202200028<p>
    </div>
</footer>
</body>
</html>