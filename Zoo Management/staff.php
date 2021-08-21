<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Staff login</title>
    <style type = "text/css">
    body{
        background-image: url(https://images.unsplash.com/photo-1565416593187-36f12e173f74?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
        font-family: 'Abril Fatface', cursive;
        background-repeat: no-repeat;
        background-size: cover;
        }
    h1{
      font-size: 4rem;
      color: white;
      text-align: center;
    }

    h3{
      font-family: "Work Sans", sans-serif;
      font-weight: 600;
      font-size: 3em;
      width: 10em;
    }
    .buttons{
      padding-left: 15px;
    }
    .logout{
      padding-left: 45%;
    }
    .button {
    	border: 3px solid #blue;
    	border-radius: 40px;
    	color: blue;
    	background-color: white;
    	padding: 10px 25px;
    	margin: 0 10px;
    	text-align: center;
    	text-decoration: none;
    	font-weight: bold;
    	display: inline-block;
    	font-size: 16px;
    	cursor: pointer;
    	transition: all 0.3s;
    }
    </style>
  </head>
  <body>
    <div class="buttons">
      <h1> Zoo Management System </h1>
          <br>
          <br>
          <div class="w3-row-padding">
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/141/141796.svg"  width="60">
                  <h2>Animal</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button1.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/1970/1970580.svg"  width="60">
                  <h2>Cage</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button2.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/1876/1876832.svg"  width="60">
                  <h2>Caretaker</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button3.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/premium-icon/icons/svg/2954/2954418.svg"  width="60">
                  <h2>Vet</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button4.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/3580/3580415.svg"  width="60">
                  <h2>Clinic</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <a style="text-decoration: none;" href="button5.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/3188/3188170.svg"  width="60">
                  <h2>Food Storage</h2>
                </div>
              </a>
            </div>
            <div class="w3-col l2">
              <br>
              <a style="text-decoration: none;" href="button6.php">
                <div class="w3-card w3-text-black w3-white w3-center w3-padding-32">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/3188/3188170.svg"  width="60">
                  <h2>Booking details</h2>
                </div>
              </a>
            </div>
          </div>
          <br>
          <br>
          <div class="logout">
              <form action="logout.php">
              <button type="submit" class="button btn btn-primary">Sign Out</button></form>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    -->
  </body>
</html>
