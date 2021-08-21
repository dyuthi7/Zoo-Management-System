

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $animal_no=$_POST['animal_no'];
  $animal_type=$_POST['animal_type'];
  $gender=$_POST['gender'];
$no_of_descendants=$_POST['no_of_descendants'];
$cage_no=$_POST['cage_no'];
$animal_name=$_POST['animal_name'];

 if($animal_no!="" && $animal_type!="")
   {
     $sql3="insert into animals values('$animal_no', '$animal_type', '$gender','$no_of_descendants', '$cage_no', '$animal_name')";   // student is the table name
     if ($con->query($sql3) == TRUE) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
     }

$con->close();
}
?>
