<?php
  require_once 'php/init.php';
 ?>

<!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

     <title>Withdraw</title>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a class="navbar-brand" href="#">Queuing System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </div>
        </div>
      </nav>
      <div class="text-center mt-5 pt-3">
        <h1 class="font-weight-light pb-0 mb-0" style="font-size: 100px;">WITHDRAW</h1>
        <h5 class="font-weight-light pt-0 mt-0" style="letter-spacing: 5px; font-size: 50px;">queuing system</h5>
      </div>
      <div class="bg-dark jumbotron col-md-6 mx-auto text-center mt-5">
        <form class="" action="" method="POST">
          <div class="form-group d-inline">
             <?php
             insertN();
             ?>
            <label class="text-light mb-3" for="">Name</label>
            <br>
             <input class="form-control mx-auto d-inline" style="width:450px" type="text" name="names" placeholder="Enter your name" required/>
             <input class="btnW btn btn-primary btn-sm py-2 d-inline" onclick="location.href='dashboard.php'" type="submit" name="btnW" value="Withdraw">
           </div>
             <?php
             if (isset($_POST['btnW'])) {
               header("Location: dashboard.php");
             }
            ?>
          </div>
        </form>
       </div>
     </div>

     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

   </body>
 </html>
