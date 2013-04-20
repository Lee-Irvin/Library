<?php
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
            <h1>Add Image</h1>
            <div class="content">
            <form id="form1" name="form1" method="post" action="create_image.php" enctype="multipart/form-data" >
                <table>
                    <tr>
                        <td><p>Add Album Image:</p></td>
                        <td><input type="file" name="image" id="image" /></td>
                    </tr>
                    <tr>
                        <td><p>Short description (Optional):</p></td>
                        <td><input type="textarea" name="description" id="description" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
                    </tr>
                </table>
            </form>
            <?php
            $qry=mysql_query("SELECT * FROM gallery_image", $con);
            if(!$qry)
            {
            die("Query Failed: ". mysql_error());
            }
            ?>
                <div class="back"><a href="gallery_image.php">Back</a></div>
            </div>
            </div>
        </div>
    </body>
</html>

