
<html>
 <head>
  <title>My Movie Site <?php echo $_POST['favmovie'];?></title>
 </head>
 <body>
<?php
define("favmovie", "The Life of Brian");
echo "My favorite movie is ";
echo favmovie;
$movierate = 5;
echo "My movie rating for this movie is: ";
echo $movierate;
?>
 </body>
</html>

