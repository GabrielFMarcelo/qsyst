<?php
  require_once 'php/init.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="/css/styles.css">
     <title>Dashboard</title>
     <style media="screen">
     .transac{
       font-size: 100px;
     }

     .queu{
       font-size: 50px;
     }

     @media (max-width:820px) {
       .transac{
         font-size: 50px;
       }
       .queu{
         font-size: 30px;
       }
     }
     </style>
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
           <a class="nav-link active" href="dashboard.php">Dashboard</a>
         </div>
       </div>
     </nav>
     <div class="container-fluid">
       <div class="col-md">
         <div class="text-center mt-5 pt-5">
           <h1 class="transac font-weight-light pb-0 mb-0">DASHBOARD</h1>
           <h5 class="queu font-weight-light pt-0 mt-0">queuing system</h5>
         </div>
   </div>
     </div>
     <?php
    echo "<br>";
    $view = new view();
    $view->userInfo();
    ?>
   </body>
 </html>
