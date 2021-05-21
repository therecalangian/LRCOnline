<?php

session_start();
include 'db_connection.php'; // Using database connection file here

$subject = $_GET['subject']; // get id through query string
$sql = "DELETE FROM subjects where subject = '$subject'";
$delete = mysqli_query($db,$sql); // delete query

if($delete)
{
    mysqli_close($db); // Close connection
    header("location:list_subj_admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>