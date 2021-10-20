<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db))

$query = 'ALTER TABLE movie_leadactor
    ADD CONSTRAINT fk_movie_id
    foreign key (movie_leadactor)
    references movieid (people_id)';
    Echo "Added data";
?>