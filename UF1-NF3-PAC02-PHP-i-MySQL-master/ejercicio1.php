<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990

$query = 'ALTER TABLE movie
          ADD CONSTRAINT movie_leadactor_people
           FOREIGN KEY (movie_leadactor)
           REFERENCES people_id(ID)';
 mysqli_query($db,$query) or die(mysqli_error($db));

 echo 'Data inserted successfully!';
 ?>