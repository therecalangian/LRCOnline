<?php
#checking uploaded file
if(isset($_POST['submit']))
{
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTemp = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  print_r($file);

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png');

  #checking valid image format
  if(in_array($fileActualExt, $allowed))
  {
    if($fileError === 0)
    {#1000kb = 100mb <- max
      if($fileSize < 1000000)
      {
        $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTemp, $fileDestination);
        header("Location: index.php?uploadsuccess");
      }
      else {
        echo "File is too large!";
      }

    }
    else {
      echo "Error upload";
    }
  }
  else {
    echo "No :)";
  }

}

 ?>
