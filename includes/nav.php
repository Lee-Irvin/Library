<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die("connection to database failed" . mysql_error());
}

$dataselect = mysql_select_db("db_1", $con);
if (!$dataselect) {
    die("Database namelist not selected" . mysql_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <title>Gallery Page | Development stage</title>
        <style type="text/css">
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            a:active {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
<div class="nav_wrapper">
    <div class="Hnav border">
        <ul>
            <h1>Website</h1>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="services.php">Products / services</a></li>
            <li><a href="upload.php">Upload</a></li>
            <li><a href="download.php">Download</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="faqs.php">FAQ's</a></li>
            <li><a href="regs.php">Register</a></li>
        </ul>
    </div>
    <div class="admin_nav border">
        <ul>
            <h1>CMS</h1>
            <li><a href="manage.php">Admin Login</a></li>
            <li><a href="manage_home.php">Manage Home</a></li>
            <li><a href="manage_contacts.php">Manage Contacts</a></li>
            <li><a href="new_album.php">Create Album</a></li>
            <li><a href="man_album.php">Manage Albums</a></li>
            <li><a href="man_prod.php">Manage Products</a></li>
            <li><a href="man_upload.php">Manage Uploads</a></li>
            <li><a href="man_down.php">Manage Downloads</a></li>
            <li><a href="man_art.php">Manage Articles</a></li>
            <li><a href="man_events.php">Manage Events</a></li>
            <li><a href="man_faqs.php">Manage FAQ's</a></li>
            <li><a href="man_regs.php">Manage Registrations</a></li>
            
        </ul>
    </div>
    <div class="clear"></div>
</div>
<br />