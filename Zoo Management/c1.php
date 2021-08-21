<html>

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $cage_no=$_POST['animal_no'];
  $animal_no=$_POST['cage_no'];
  $no_of_animals=$_POST['no_of_animals'];
 if($cage_no!="" && $animal_no!="")
   {
     $sql3="insert into cage values('$animal_no', '$cage_no', '$no_of_animals')";   // student is the table name
     if ($con->query($sql3) == TRUE) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
     }
     
$con->close();
}
?>
</body>
</html>
