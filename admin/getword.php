<?php
include('../config.php');

$sql = "SELECT word FROM words ORDER BY RAND() LIMIT 1";

$result = mysqli_query($db, $sql);

if( $row = mysqli_fetch_assoc($result) ) {
    $word = $row['word'];
}
else {
    echo mysqli_error();
}

mysqli_close($db);

echo $word;
