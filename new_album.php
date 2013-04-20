
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
            <h1>Create New Album</h1>
            <div class="content">
            <form id="form1" name="form1" method="post" action="create_album.php" enctype="multipart/form-data" >
                <table>
                    <tr>
                        <td><p>Enter a New Album Name:</p></td>
                        <td><input type="text" name="name" id="name" /></td>
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
            $qry=mysql_query("SELECT * FROM gallery_album", $con);
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

