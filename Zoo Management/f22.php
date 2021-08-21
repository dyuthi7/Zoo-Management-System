<html>

<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"proj");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $cage_no=$_POST['cage_no'];
  $CT_id=$_POST['CT_id'];
  $f_fname=$_POST['f_fname'];
  $f_lname=$_POST['f_lname'];
  $quant_of_food=$_POST['quant_of_food'];
  $ST_id=$_POST['ST_id'];
  $type_of_food=$_POST['type_of_food'];
 if($CT_id!="" && $cage_no!="")
   {
     $sql3="insert into foodstore values('$cage_no', '$CT_id', '$f_fname','$f_lname','$quant_of_food','$ST_id','$type_of_food')";   // student is the table name
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
