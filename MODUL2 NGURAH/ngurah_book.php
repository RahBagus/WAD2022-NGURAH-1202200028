<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Booking Now!</title>
</head>
<body>
<header>
      
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

    <main role="main">

    <?php
    $merk_view = $_POST['merk'];
    $price_view = $_POST['price'];
    $cc_view = $_POST['cc'];
    $transmision_view = $_POST['transmision'];
    $car_image_view = $_POST['car'];
    ?>


      <section class="jumbotron text-left">
        <div class="container">
          
        <img class="card-img-top" src="<?php echo $car_image_view?>" alt="Card image cap">
          <h1><?php echo $merk_view ?></h1>
          <h4> Price : Rp.<?php echo $price_view?></h4>
          <p> Speed : <?php echo $cc_view?></p>
          <p> Transmision : <?php echo $transmision_view?></p>
      
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
         
        <form method="post" action="ngurah_My-booking.php">


        <input type="hidden" name="price" value="<?php echo $price_view?>">
        <input type="hidden" name="cc" value="<?php echo $cc_view?>">
        <input type="hidden" name="transmision" value="<?php echo $transmision_view?>">

            <h1 class="mb-3">Please fill in the requirements!</h1>
            <h4></h4>

            <div class="mb-3">
                <label for="readonly input example" class="form-label">Nama:</label>
                <input class="form-control" name="fullname" type="text" value="Ngurah_1202200028" aria-label="readonly input example" readonly>
        
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address <span style="color: red;">*</span></label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="default input example">Date<span style="color: red;">*</span></label>
                <input class="form-control" type="date" name="date" aria-label="default input example" required>
            </div>

            <div class="mb-3">
                <label for="default input example">Time<span style="color: red;">*</span></label>
                <input class="form-control" type="time" name="time" aria-label="default input example" required>
            </div>

            <div class="mb-3">
                <label for="default input example">Phone Number<span style="color: red;">*</span></label>
                <input class="form-control" type="text" name="phone" aria-label="default input example" required>
            </div>

            <div class="mb-3">
                <label for="default input example">Duration (Days) <span style="color: red;">*</span></label>
                <input class="form-control" type="text" name="duration" aria-label="default input example" required>
            </div>

            <div class="mb-3">
                <label for="default input example">Car Type<span style="color: red;">*</span></label>
                <select class="form-control" name="type" aria-label="readonly input example" >
                  <option value="#">Choose</option>
                  <option value="<?php echo $merk_view?>" <?php echo $merk_view ? 'selected' : '' ?>><?php echo $merk_view?></option>
                </select>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="protocol" value="5000" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Healt Protocol / Rp.5000
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="fuel" value="100000" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Fuel Filled / Rp.10000
              </label>
            </div>

            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox" name="driver" value="50000" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Driver / Rp.50000
              </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

<footer class="text-muted">

    <div class="container text-center">
    <p>@Ngurah_1202200028<p>
    </div>
    
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>