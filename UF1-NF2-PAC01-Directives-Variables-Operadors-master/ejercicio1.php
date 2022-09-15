<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1<?php echo $_GET['favmovie'];
                           echo $_GET['favgame'];?></title>
</head>
<body>
<?php
session_start();
if(isset($_POST['user'])){
    echo $_POST['user'];
}else{
    $_POST['user'] = "Nada";
}
$_SESSION['username'] = $_POST['user'];
if(isset($_POST['surname'])){
    echo $_POST['surname'];
}else{
    $_POST['surname'] = "Nada";
}
$_SESSION['usersurname'] = $_POST['surname'];
if(isset($_POST['year'])){
    echo $_POST['year'];
}else{
    $_POST['year'] = "Nada";
}
$_SESSION['useryear'] = $_POST['year'];
if(isset($_POST['pass'])){
    echo $_POST['pass'];
}else{
    $_POST['pass'] = "Nada";
}
$_SESSION['userpass'] = $_POST['pass'];
if(isset($_POST['telf'])){
    echo $_POST['telf'];
}else{
    $_POST['telf'] = "Nada";
}
$_SESSION['usertelf'] = $_POST['telf'];
$_SESSION['authuser'] = 0;


if (($_SESSION['username'] == 'Ruben') and
    ($_SESSION['usersurname'] == 'Henares') and
    ($_SESSION['useryear'] == '20') and
    ($_SESSION['userpass'] == '12345') and
    ($_SESSION['usertelf'] == '670238936'))
    {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
echo "Welcome to our site, ";
echo "<br/>";
echo $_SESSION["username"];
echo "<br/>";
echo $_SESSION["usersurname"];
echo "<br/>";
echo $_SESSION["useryear"];
echo "<br/>";
echo $_SESSION["usertelf"];
echo "! <br/>";
/*define("favmovie", "SPIDERMAN 2");*/
echo "My favorite movie is ";
/*echo favmovie;*/
$myfavmovie = urlencode("SPIDERMAN 2");
echo "<a href='ejercicio1.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
if(isset($_GET['favmovie'])){
    echo $_GET['favmovie'];
}else{
    $_GET['favmovie'] = "Nada";
}
echo "<br/>";
echo $_GET['favmovie'];
echo "<br/>";
/*define("favgame", "ELDEN RING");*/
echo " My favorite game is ";
/*echo favgame;*/
$myfavgame = urlencode("ELDEN RING");
echo "<a href='ejercicio1.php?favgame=$myfavgame'>";
echo "Click here to see information about my favorite game!"; 
echo "</a>";
if(isset($_GET['favgame'])){
    echo $_GET['favgame'];
}else{
    $_GET['favgame'] = "Nada";
}
echo "<br/>";
echo $_GET['favgame'];
$movierate = 5;
echo "<br/>";
echo "My movie rating for this movie is: ";
echo $movierate;
echo "<br/>";

echo "<p>Esto es el NULL pero si mostrando el usuario</p>";

$nombre_usuario = $_GET['user'] ?? 'nadie';

$nombre_usuario = isset($_GET['user']) ? $_GET['user'] : 'nadie';

$nombre_usuario = $_GET['user'] ?? $_POST['user'] ?? 'nadie';

echo $nombre_usuario;

echo "<p>Y esto es el NULL original</p>";
$nombre_usuarioN = $_GET['usuario'] ?? 'nadie';
// Esto equivale a:
$nombre_usuarioN = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['usuario'], $_POST['usuario'],
// y 'nadie'.
$nombre_usuarioN = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie';

echo $nombre_usuarioN;
echo "<br/>";

echo "<p>Esto es el date</p>";
date_default_timezone_set('Europe/Andorra');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
?>
</body>
</html>