

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $clinic_id=$_POST['clinic_id'];
  $animal_no=$_POST['animal_no'];
  $cage_no=$_POST['cage_no'];
$vet_id=$_POST['vet_id'];
$type_of_ailment=$_POST['type_of_ailment'];
$treatment=$_POST['treatment'];

 if($clinic_id!="" && $treatment!="")
   {
     $sql3="insert into clinic values('$clinic_id', '$animal_no', '$cage_no','$vet_id','$type_of_ailment','$treatment')";   // student is the table name
     if ($con->query($sql3) == TRUE) {
         echo "New record created successfully";
       } else {
             echo "Error: " . $sql . "<br>" . $con->error;
     }
   }

$con->close();
}
?>
