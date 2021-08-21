<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">
<style type = "text/css">

  body{
    font-family: "Work Sans", sans-serif;
    background-repeat: no-repeat;
    font-size: 30px;
    background-size: cover;

    padding-top: 5px;
 background-color: white;
     /* background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #04619f 74%); */
background-color: #000000;
/* background-image: linear-gradient(147deg, #000000 0%, #2c3e50 100%);
 padding-bottom: 20%; */
background-image: url(https://images.unsplash.com/photo-1604917408486-e7f3c94994df?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
  }
  table, th, td {
  border: 1px solid white;
  padding: 20px;
  text-align: center;
  color: white;
}
table {
  margin: auto;
  border-spacing: 25px;
}
h1{
  font-family: 'Abril Fatface', cursive;
  font-size: 2.5rem;
  color: white;
  text-align: center;

}
</style>
<body>
  <h1> ALL SLOT </h1>
  <br>
  <br>
  <table>
    <tr>
      <th style="font-size: 20px">Slot ID</th>
      <th style="font-size: 20px">Time</th>
      <th style="font-size: 20px">Amount</th>
      <th style="font-size: 20px">Book</th>
    </tr>
<?php
include('../config.php');

// Create connection
 // Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT *FROM slot";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        ?>
        <tr>
            <td style="font-size: 20px"><?php echo $row["id"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["time"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["amount"]; ?></td>
            <td style="font-size: 20px"><a href="book.php">Book</a></td>
        </tr>
          <?php
    }
} else {
    echo "0 results";
}
$db->close();
?>
<tr>
</tr>
</table>
</body>
</html>
