<html>

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $CT_id=$_POST['CT_id'];
  $animal_no=$_POST['animal_no'];
  $timing=$_POST['timing'];
$salary=$_POST['salary'];
$type_of_job=$_POST['type_of_job'];
$C_fname=$_POST['C_fname'];
$C_lname=$_POST['C_lname'];
$cage_no=$_POST['cage_no'];
 if($cage_no!="" && $animal_no!="")
   {
     $sql3="insert into caretaker values('$CT_id', '$animal_no', '$timing','$salary','$type_of_job','$C_fname','$C_lname','$cage_no')";   // student is the table name
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
