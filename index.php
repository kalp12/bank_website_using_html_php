<!DOCTYPE html>
<html lang="en">
<head>
<title>Spark web development project task 1</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
  include 'navbar.php';
  ?>


    <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>The Spark bank System</h1>
                </div>
              </div>
        </div>


    <!-- Activity section -->
        <div class="row activity text-center">
            <div class="col-md act">
                    <img src="image/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
            </div>
            <div class="col-md act">
                <img src="image/transfer.jpg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="image/history.jpg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2022. Made by <b>KALP MOTA</b></p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    
</body>
</html>