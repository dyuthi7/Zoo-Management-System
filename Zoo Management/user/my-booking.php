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
background-image: url(https://images.unsplash.com/photo-1604602236223-156a7f332bc4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80);

  }
  table, th, td {
    margin: auto;
  border: 1px solid white;
  padding: 10px;
  text-align: center;
  color: white;
}
table {
  border-spacing: 25px;
}
h1{
  font-family: 'Abril Fatface', cursive;
  font-size: 2.5rem;
  color: white;
  text-align: center;
  padding-top: 20px;

}
</style>
<body>
  <center><h1> My Book </h1></center>
  <br>
  <br>
  <table>
    <tr>
      <th style="font-size: 20px">Booking ID</th>
      <th style="font-size: 20px">Phone</th>
      <th style="font-size: 20px">Email</th>
      <th style="font-size: 20px">Name</th>
      <th style="font-size: 20px">Amount</th>
      <th style="font-size: 20px">time</th>
      <th style="font-size: 20px">date</th>
    </tr>
<?php
   session_start();

include('../config.php');
 // Create connection
 // Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if(!$_SESSION['username'])
{
  header("Location:log.php");
}
$name = $_SESSION['username'];
$sql = "SELECT *FROM booking where name LIKE '$name%'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        ?>
        <tr>
            <td style="font-size: 20px"><?php echo $row["id"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["phone"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["email"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["name"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["amount"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["time"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["date"]; ?></td>
        </tr>
          <?php
    }
}
$db->close();
?>
<tr>
</tr>
</table>
</body>
</html>
