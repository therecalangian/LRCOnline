<?php
   include('db_connection.php');
   session_start();
   
   $user_check = $_SESSION['addToDatabase'];
   $user_check = $_SESSION['addSubjToDatabase'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $addToDatabase = $row['subject'];
   $addToDatabase = $row['name'];
   $addToDatabase = $row['year_level'];
   $addToDatabase = $row['email'];
   $addToDatabase = $row['mobile_number'];
   $addToDatabase = $row['date_appoint'];
   $addToDatabase = $row['time_appoint'];
   $addToDatabase = $row['course'];
   $addToDatabase = $row['topic'];

   $addSubjToDatabase = $row['subject'];
      
   if(!isset($_SESSION['addToDatabase'])){
      header("location:form.php");
      die();
   }

   if(isset($_SESSION['addSubjToDatabase'])) {
      header("location:list_subj_admin.php");
      die();
    }

?>
