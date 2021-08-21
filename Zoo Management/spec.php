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

$sql = "SELECT animal_name, animal_no, animal_type, cage_no, gender, no_of_descendants FROM animals WHERE animal_no=1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "animal_no: " . $row["animal_no"]. " animal name: " . $row["animal_name"]. " animal_type: " . $row["animal_type"]. " cage_no: ". $row["cage_no"]. " gender" . $row["gender"]." no of descendants ".  $row["no_of_descendants"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
