<?php
include "includes/conn.php";

// open connection

$con = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database

mysql_select_db($db) or die ("Unable to select database!");

// create query

$query = "SELECT * FROM contacts";

// execute query

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned

if (mysql_num_rows($result) > 0) {

    // yes

    // print them one after another

    echo "<table cellpadding=5 border=1>";
    while($row = mysql_fetch_row($result)) {

        echo "<tr>";

        echo "<td>".$row[0]."</td>";

        echo "<td>" . $row[1]."</td>";

        echo "<td>".$row[2]."</td>";
        
        echo "<td>".$row[3]."</td>";

        echo "<td>" . $row[4]."</td>";
        
        echo "<td>" . $row[5]."</td>";
                
        echo "<td>" . $row[6]."</td>";

        echo "<td><a href='#'>Veiw</a> | <a href='#'>Edit</a> | <a href='#'>Delete</a></td>";
        
        echo "</tr>";

    }
    echo "</table>";

}

else {

    // no

    // print status message

    echo "No rows found!";

}

// free result set memory

mysql_free_result($result);

// close connection

mysql_close($con);
?>