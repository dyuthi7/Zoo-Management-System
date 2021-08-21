<?php
   session_start();
if(!$_SESSION['username'])
{
  header("Location:log.php");
}
include('../config.php');  
if ($_POST)
{
  $name  = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $slot = $_POST["slot"];
  $date = $_POST["date"];
  $sql = "SELECT *FROM slot";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $time = $row["time"];
  $amount = $row["amount"];
  }
  }

  $sql3="insert into booking (phone,email, name, amount, date, time) 
    values('$phone', '$email', '$name', '$amount', '$date', '$time')";   // student is the table name
     if ($db->query($sql3) == TRUE) {
         header("Location:index.php");
     } else {
         header("Location:index.php");
     }
      $db->close();
}
?>
<!DOCTYPE html>
<html lang="en" class="lang="fr"">
  <head>
    <meta charset="UTF-8">
    <title>Login register bootstrap 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'> 
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan+Script'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'>
    <style type="text/css">
      body {
        font-family: "Work Sans", sans-serif;
        background-repeat: no-repeat;
        font-size: 25px;
        background-size: cover;
        background-image: url(https://images.unsplash.com/photo-1494861895304-fb272971c078?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80);
        background-color: white;
        padding-left: 10px;
        padding-top: 55px;
      }
    </style>
  </head>
  <body>
  <div class="container content">
      <div class="row">
          <div class="card card-login mx-auto mt-5 col-md-8 col-lg-6">
	            <form action="" method="post">
                  <div class="card-header">Enter Details</div>
                  <div class="card-body">
                      <div class="form-group">
                          <div class="form-label-group">
                              <input type="number" name="phone" class="form-control" placeholder="Phone number" required >
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-label-group">
                              <input type="email" name="email" class="form-control" placeholder="Email" required >
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-label-group">
                              <input type="text" name="name" class="form-control" value="<?php $n = $_SESSION["username"]; echo $n; ?>" placeholder="Name " required >
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-label-group">
                              <input type="date" name="date" class="form-control" placeholder="date slot" required >
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-label-group">
                              <select class="form-control" name="slot">
                              <?php
                                 
                              $sql = "SELECT *FROM slot";
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                              ?>
                              <option value="<?php echo $row['id']; ?>">Time <?php echo $row["time"]; ?> - <?php echo $row["amount"]; ?>Rs</option>
                              <?php
                              }
                              } 
                              
                              ?>
                              </select>
                          </div>
                      </div>
                       
		                   
                  </div>
			            <div class="form-group">
				              <button class="btn btn-primary btn-block" type="submit">Submit</button>
			            </div>
              </form>
          </div>
      </div>
  </div>
</body>
</html>
