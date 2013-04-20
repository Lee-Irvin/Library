<?php
//Create The Upload Script
//The "upload_file.php" file contains the code for uploading a file:

if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />"; // gets error message if any 
  }
else
  {
   // display informations of the uploaded file
  echo "Upload: " . $_FILES["file"]["name"] . "<br />"; //The name of the uploaded file
  echo "Type: " . $_FILES["file"]["type"] . "<br />"; //The type of the uploaded file
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; //the size of the uploaded file
  echo "Stored in: " . $_FILES["file"]["tmp_name"]; //the temporal storage location of the uploaded file
  }
?> 

<?php
//Restrictions/VALIDATION on Upload
//In this script we add some restrictions to the file upload. The user may only upload .gif or .jpeg files and the file size must be under 20 kb:

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];

    // SAVING THE FILE
     if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }

    }
  }
else
  {
  echo "Invalid file";
  }
?> 
