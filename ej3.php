<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the people
$query = 'INSERT INTO people
        (people_id)
    VALUES
        (1, "Director", Juan, Dani, Rubén),
	(2, "Actores", Joel, Marvin, Luis)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo "Data inserted successfully!";
?>