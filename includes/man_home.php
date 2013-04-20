<?php
$dbname = 'db_1';

if (!mysql_connect("localhost", "root", "")) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
echo "<ul>";
while ($row = mysql_fetch_row($result)) {
    echo "<li><a href='#'>";
    echo "{$row[0]}\n";
    echo "</a></li>";
}
echo "</ul>";


mysql_free_result($result);
?>