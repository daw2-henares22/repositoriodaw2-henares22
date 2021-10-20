<?php
$db = mysqli_connect('localhost', 'root', 'root') or
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'ALTER TABLE movie_leadactor
ADD CONSTRAINT (people_id) FOREIGN KEY people(people_id)';
Echo "Added data";
?>