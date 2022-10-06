<?php
    $db = mysqli_connect('localhost', 'root', 'root') or 
        die ('Unable to connect. Check your connection parameters.');
        
    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
    
    $query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Fast and furious", 1, 2001, 5, 1),
        (5, "Ghostbusters", 1, 1984, 4, 1),
        (6, "Titanic", 1, 1998, 2, 1)';
    mysqli_query($db,$query) or die(mysqli_error($db));

    $query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Paul Walker", 1, 0),
        (8, "Harold Ramis", 1, 0),
        (9, "Leonardo di Caprio", 1, 0)';
    mysqli_query($db,$query) or die(mysqli_error($db));

?>