<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_unset();
    ?>
    <html>
     <head>
      <title>Please Log In</title>
     </head>
     <body>
      <form method="post" action="ejercicio1.php">
       <p>Enter your username: 
        <input type="text" name="user"/>
       </p>
       <p>Enter your usersurname: 
        <input type="text" name="surname"/>
       </p>
       <p>Enter your useryear: 
        <input type="number" name="year"/>
       </p>
       <p>Enter your password: 
        <input type="password" name="pass"/>
       </p>
       <p>Enter your usertelf: 
        <input type="number" name="telf"/>
       </p>
       <p>
        <input type="submit" name="submit" value="Submit"/>
       </p>
      </form>
     </body>
    </html>