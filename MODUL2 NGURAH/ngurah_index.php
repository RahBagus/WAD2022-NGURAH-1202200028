<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>MODUL2 NGURAH</title>
</head>
<body>
<header>

      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-center ">
          <a href="ngurah_index.php" class="navbar-brand d-flex align-items-center">
            Home
          </a>
          <a href="ngurah_My-booking.php" class="navbar-brand d-flex align-items-center" >
            My Booking
          </a>
        </div>
      </div>

</header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">WAD RENT</h1>
          <p class="lead text-muted">We provide a good car for you!</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
         <?php 
          $merk = ['Mobilio', 'HRV', 'Civic'];
          $price = ['100000','150000', '200000'];
          $cc = ['1500cc','1700cc', '2000cc'];
          $transmision = ['Automatic', 'Manual'];
          $car_image = ['image/mobilio.png', 'image/hrv.png', 'image/civic.png'];
         ?>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo $car_image[0]?>" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h4 class="card-text"><?php echo $merk[0] ?></h4>
                  <h5 class="card-text">Price : Rp.<?php echo $price[0] ?></h5>
                  <p class="card-text">Transmision : <?php echo $transmision[1] ?></p>
                  <p class="card-text">Speed : <?php echo $cc[0]?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <form action="ngurah_book.php" method="post">
                            <input type="hidden" name="merk" value="<?php echo $merk[0]?>">
                            <input type="hidden" name="price" value="<?php echo $price[0]?>">
                            <input type="hidden" name="cc" value="<?php echo $cc[0]?>">
                            <input type="hidden" name="transmision" value="<?php echo $transmision[1]?>">
                            <input type="hidden" name="car" value="<?php echo $car_image[0]?>">
                            <input type="submit" value="Book Now">
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo $car_image[1]?>" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h4 class="card-text"><?php echo $merk[1] ?></h4>
                  <h5 class="card-text">Price : Rp.<?php echo $price[1] ?></h5>
                  <p class="card-text">Transmision : <?php echo $transmision[1] ?></p>
                  <p class="card-text">Speed : <?php echo $cc[1] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <form action="ngurah_book.php" method="post">
                            <input type="hidden" name="merk" value="<?php echo $merk[1]?>">
                            <input type="hidden" name="price" value="<?php echo $price[1]?>">
                            <input type="hidden" name="cc" value="<?php echo $cc[1]?>">
                            <input type="hidden" name="transmision" value="<?php echo $transmision[1]?>">
                            <input type="hidden" name="car" value="<?php echo $car_image[1]?>">
                            <input type="submit" value="Book Now">
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image/civic.png" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h4 class="card-text"><?php echo $merk[2] ?></h4>
                  <h5 class="card-text">Price : Rp.<?php echo $price[2] ?></h5>
                  <p class="card-text">Transmision : <?php echo $transmision[0]?></p>
                  <p class="card-text">Speed : <?php echo $cc[2] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <form action="ngurah_book.php" method="post">
                            <input type="hidden" name="merk" value="<?php echo $merk[2]?>">
                            <input type="hidden" name="price" value="<?php echo $price[2]?>">
                            <input type="hidden" name="cc" value="<?php echo $cc[2]?>">
                            <input type="hidden" name="transmision" value="<?php echo $transmision[0]?>">
                            <input type="hidden" name="car" value="<?php echo $car_image[2]?>">
                            <input type="submit" value="Book Now">
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

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