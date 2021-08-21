<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">
<style type = "text/css">

  body{
    background-image: url(https://images.unsplash.com/photo-1561109573-d2d121be6be9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1026&q=80);
    font-family: 'Abril Fatface', cursive;
    background-repeat: no-repeat;
    background-size: cover;
  }
  h1{
    font-size: 4rem;
    color: white;
    text-align: center;
  }

 h2{
   padding-top: 1px;
   font-family: "Work Sans", sans-serif;
   font-weight: 600;
   font-size: 2rem;
   width: 10em;
   padding-left: 10px;
   color : white;
 }
 
 </style>

<body>
<h1>Specific animals</h1>
<?php
     include('config.php');

    $sql = "SELECT *FROM animals";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          ?>
          <div class="card bg-light p-2" style="width: 400px;margin-bottom: 10px">
              <h3><?php echo $row["animal_name"]; ?></h3>
              <a href="show-details.php?id=<?php echo $row["animal_no"]; ?>">View</a>
          </div>
            <br>
            <?php
          }
    } else {
        echo "0 results";
    }
    $db->close();
    ?>

<div class="backbutton">
    <form action="button.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg>
    <button type="submit" class="bi bi-arrow-left-circle-fill btn btn-primary">Previous</button></form>
</div>
<body style = "background : url(https://images.unsplash.com/photo-1599103866282-103efc9eb844?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);background-size: 100% 100%; ">
</html>
</body>
</html>
