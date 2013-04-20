        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
                <h1>Manage your gallery</h1>
                <div class="content">
                    <?php
                    $id = null;
                    $qry=mysql_query("SELECT * FROM gallery_album", $con);
                    if(!$qry)
                    {
                    die("Query Failed: ". mysql_error());
                    }
                    ?>
                    <?php
                     echo "<table cellpadding=5 border=1>";
                     while($row=mysql_fetch_array($qry))
                        {
                                 echo "<tr>";
                                  echo"<td>".$row[0]."</td>";
                                  echo"<td>".$row[1]."</td>";
                                  echo"<td>".$row[2]."</td>";
                                  echo"<td>".$row[3]."</td>";
                                  echo"<td>".$row[4]."</td>";
                                  echo"<td>".$row[5]."</td>";
                                  echo "<td><a href='gallery_image.php'>Manage Album</a></td>";
                                  echo "<td><a href='#'>Veiw</a> | <a href='#'>Edit</a> | <a href='#'>Delete</a></td>";
                                 echo "</tr>";
                        }
                     echo "</table>";
                     $id = $row[0];
                     
                    ?>
                </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
