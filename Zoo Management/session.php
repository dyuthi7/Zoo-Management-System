<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];
   //
   // $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   //
   // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   //
   // $login_session = $row['username'];

   $sql = "select username from admin where username = '$user_check' ";
   if($stmt = mysqli_prepare($db,$sql)) {
     if(mysqli_stmt_execute($stmt)) {
       $result = mysqli_get_result($stmt);
       executeQuery($stmt);
     }
   }
   if(!isset($_SESSION['login_user'])){
      header("location:log.php");
   }
?>
