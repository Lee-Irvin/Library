<?php
//$name=$_FILES['image']['name'];
//$tmp=$_FILES['image']['tmp_name'];
//$err=$_FILES['image']['error'];
//if($err==0)
//{
//move_uploaded_file($tmp, $name);
//}
$name=$_POST['name'];
$description=$_POST['description'];
//$image=$_FILES["image"]["name"];


$con = mysql_connect("localhost","root","");
if(!$con)
{
die("connection to database failed".mysql_error());
}

$dataselect = mysql_select_db("db_1",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <title></title>
    </head>
    <body>
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
            <h1>New Image Added</h1>
            <div class="content">
            <?php
            $qry=mysql_query("INSERT INTO gallery_image(image_id, name, description, date_created,date_updated)VALUES(NULL,'$name','$description', NOW(), NOW())", $con);
            if(!$qry)
            {
            die("Query Failed: ". mysql_error());
            }
            else
            {
            echo "<br/>";
            echo "Image Added Successfully";
            echo "<br/>";
            }
            ?>
            <?php
            $qry=mysql_query("SELECT * FROM gallery_image", $con);
            if(!$qry)
            {
            die("Query Failed: ". mysql_error());
            }
            ?>
            </div>
            </div>
        </div>
    </body>
</html>
