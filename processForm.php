<?php
$msg = "";
$css_class="";

$conn = mysqli_connect('localhost', 'root','','lrc-v0.0-homepage');

if (isset($_POST['save-event'])){
  $title = $_POST['eventTitle'];
  $caption = $_POST['caption'];
  $eventName = time() . '_' . $_FILES['latestEvent']['name'];

  $target = 'uploads/' . $eventName;
  if(move_uploaded_file($_FILES['latestEvent']['tmp_name'], $target)){
    $sql = "INSERT INTO events (latestEvent, eventTitle, caption) VALUES ('$eventName', '$title', '$caption')";
    if(mysqli_query($conn, $sql)){
      $msg = "Image uploaded and saved.";
      $css_class = "alert-success";
    }else{
      $msg = "Database error: Failed to upload.";
      $css_class = "alert-danger";
    }


  }else{
    $msg = "Failed to upload";
    $css_class = "alert-danger";
    $err;
  }
}
