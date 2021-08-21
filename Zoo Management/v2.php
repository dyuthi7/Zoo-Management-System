<html>

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $vet_id=$_POST['vet_id'];
  $v_fname=$_POST['v_fname'];
  $v_lname=$_POST['v_lname'];
  $salary=$_POST['salary'];
  $animal_no=$_POST['animal_no'];

 if($vet_id!="" && $animal_no!="")
   {
     $sql3="insert into vet values('$vet_id', '$v_fname', '$v_lname','$salary','$animal_no')";   // student is the table name
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
