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
    background-image: url(https://images.unsplash.com/photo-1597852074816-d933c7d2b988?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
    padding-left: 200px;
    padding-top: 5px;

  }
  table, th, td {
  border: 1px solid white;
  padding: 20px;
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
  padding-right: 300px;
}
</style>
<body>
  <h1> CARETAKER ID: 22  DATABASE </h1>
  <table>
    <tr>
      <th style="font-size: 20px">Animal_no</th>
      <th style="font-size: 20px">Cage_no</th>
      <th style="font-size: 20px">CT_id</th>
      <th style="font-size: 20px">C_fname</th>
      <th style="font-size: 20px">C_lname</th>
      <th style="font-size: 20px">Salary</th>
      <th style="font-size: 20px">Timing</th>
      <th style="font-size: 20px">type_of_job</th>
      </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT animal_no, cage_no, CT_id, C_fname, C_lname,salary, timing, type_of_job FROM caretaker WHERE CT_id=23";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="font-size: 20px"><?php echo $row["animal_no"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["cage_no"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["CT_id"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["C_fname"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["C_lname"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["salary"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["timing"]; ?></td>
            <td style="font-size: 20px"><?php echo $row["type_of_job"]; ?></td>
        </tr>
          <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<tr>
</tr>
</table>
</body>
</html>
