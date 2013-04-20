
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
                <h1>Manage your gallery</h1>
                <div class="content">
                    <div class="Albumname">Echo $album_name</div>
                    <div>
                        <ul>
                            <li><a href="new_image.php">Add Image</a></li>
                            <li><a href="list_image.php">List Image/s</a></li>
                        </ul>
                    </div>
                    <?php
//                    $qry=mysql_query("SELECT * FROM gallery_image", $con);
//                    if(!$qry)
//                    {
//                    die("Query Failed: ". mysql_error());
//                    }
                    ?>
                    <?php
//                     echo "<table cellpadding=5 border=1>";
//                     while($row=mysql_fetch_array($qry))
//                        {
//                                 echo "<tr>";
//                                  echo"<td>".$row[0]."</td>";
//                                  echo"<td>".$row[1]."</td>";
//                                  echo"<td>".$row[2]."</td>";
//                                  echo"<td>".$row[3]."</td>";
//                                  echo"<td>".$row[4]."</td>";
//                                  echo"<td>".$row[5]."</td>";
//                                  echo "<td><a href='#'>Manage Album</a></td>";
//                                  echo "<td><a href='#'>Veiw</a> | <a href='#'>Edit</a> | <a href='#'>Delete</a></td>";
//                                 echo "</tr>";
//                        }
//                     echo "</table>";
                    ?>
                </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
