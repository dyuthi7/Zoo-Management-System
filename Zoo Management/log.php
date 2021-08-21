<?php
   include("config.php");
   session_start();
   $error = false;

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT username, password FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;

         header("location: staff.php");
      }else {
        $error = true;
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-seri;
            font-size:24px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-left: 500px;
            padding-bottom: 40px;
            background :linear-gradient(to bottom, rgba(0,255,0,0.5), rgba(0,0,255,0.5)), url(https://images.unsplash.com/photo-1504433374832-4fcf45f40967?ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80);
            background-size: cover;
         }

         .top {
           margin-bottom: -1px;
           border-bottom-right-radius: 0;
           border-bottom-left-radius: 0;
         }
         .middle {
           border-radius: 0;
           margin-bottom: 10;
         }
         p{
           font-weight: 40px;
         }
      </style>

  </head>
  <body class="text-center"

      <div align = "center">
         <div style = "width:400px; border: solid 1px black; align = "left">
            <div style = "background-color:black; color:#FFFFFF; padding:5px;"><b>Login</b></div>

            <div style = "margin:30px">

                     <form action = "" method = "post">
                       <img class="mb-4" src="https://image.shutterstock.com/z/stock-vector-logo-zoo-479703550.jpg" alt="" width="72" height="72">
                       <h1 style = color:#FFFAFA> Welcome to jungle</h1>

                        <h4 style = color:#FFFAFA> Username </h4>
                        <input type="text" name="username" class ="form-control top" placeholder="@gmail.com" required autofocus>

                        <h4 style = color:#FFFAFA> Password </h4>

                        <input type="password" name="password" class ="form-control middle" placeholder="" required autofocus>
                        <?php
                        if($error) { ?> <p style="color: red">Invalid Password </p> <?php } ?>

                        <button type= "submit" class="btn btn-primary btn-md">Submit</button>
                     </form>



          </div>

         </div>

      </div>
 </body>
</html>
