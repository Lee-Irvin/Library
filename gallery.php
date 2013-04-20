
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
                <h1>Gallery</h1>
                <div class="content">
                   <div id="menus">
                    <a href="index.php" target="_self"></a>
                        <?php
                        //Displaying List of Albums from the Table - Albums and that is limited to 6
                        $qry=mysql_query("SELECT * FROM gallery_album LIMIT 0, 6", $con);
                        if(!$qry)
                        {
                        die("Query Failed: ". mysql_error());
                        }

                        //Fetching data from the field "category" and article id is transfered to articles.php file 
                        while($row=mysql_fetch_array($qry))
                        {
                            echo "<a href=gallery.php?name=".$row['name'].">".$row['name']."<br /></a>".$row['description']."<br /><br />";
                        }
                        ?>
                    </div>
                    <div id="l_space">
                    <?php
                    /*
                    isset() is used to check wheather album name is received through url from "gallery.php" file and if it is set corresponding album is displayted using SELECT statement.
                    */

                    if(isset($_GET['id']))
                    {
                            $id=$_GET['id'];
                            $qry=mysql_query("SELECT * FROM gallery_album WHERE id=$id", $con);
                            if(!$qry)
                            {
                                    die("Query Failed: ". mysql_error());
                            }

                            /* Fetching data from the field "title" */
                            $row=mysql_fetch_array($qry);

                                    echo "<h2>".$row['name']."</h2>";
                                    echo "<img src=".$row['description']." />";
                                    echo "<p>".$row['date_created']."</p>";

                    }

                    /*
                    based on the category name received from index.php file the last added article is displayed
                    */
                    if(isset($_GET['name']))
                            {
                                    echo $_GET['name'];
                                    $name=$_GET['name'];
                                    $qry=mysql_query("SELECT * FROM gallery_album WHERE name='$name' order by articles.id DESC LIMIT 0, 1", $con);
                            if(!$qry)
                            {
                                    die("Query Failed: ". mysql_error());
                            }

                            /* Fetching data from the field "title" */
                            $row=mysql_fetch_array($qry);

                                    echo "<h2>".$row['id']."</h2>";
                                    echo "<img src=".$row['image']." />";
                                    echo "<p>".$row['contents']."</p>";

                            }

                    ?>

                    </div>
                    <div id="r_space">
                    <?php
                    /*
                    based on the id received from index.php through url, the category of the particular article is determined
                    */
                            if(isset($_GET['id']))
                            {
                                    $id=$_GET['id'];
                                    $qry=mysql_query("SELECT category FROM articles WHERE id='$id'", $con);
                                    if(!$qry)
                                    {
                                    die("Query Failed: ". mysql_error());
                                    }
                                    /* Fetching data from the field "title" */
                                    $row=mysql_fetch_array($qry);
                                    $cat=$row['category'];

                    /*
                    once the category of the article is determined this section is used to display the title of all the articles belonging to that category
                    */		
                                    $qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
                                    if(!$qry)
                                    {
                                    die("Query Failed: ". mysql_error());
                                    }
                                    while($row=mysql_fetch_array($qry))
                                    {
                                    //echo $row['title'];
                                    echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
                                    }
                            }

                    /*
                    based on the category name received from index.php file title names of all the articles belong to the category is displayed with hyperlinks
                    */	
                            if(isset($_GET['cat']))
                            {
                                    $cat=$_GET['cat'];


                                    $qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
                                    if(!$qry)
                                    {
                                    die("Query Failed: ". mysql_error());
                                    }
                                    while($row=mysql_fetch_array($qry))
                                    {
                                    echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
                                    }

                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>