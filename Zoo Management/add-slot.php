<html>

<?php

include('config.php');     
if ($_POST)
{
  $cage_no=$_POST['time'];
  $CT_id=$_POST['amount'];
  $sql3="insert into slot (time,amount) values('$cage_no', $CT_id)";   // student is the table name
     if ($db->query($sql3) == TRUE) {
         header("Location:button6.php");
     } else {
         header("Location:button6.php");
     }
      $db->close();
}
?>
</body>
</html>
