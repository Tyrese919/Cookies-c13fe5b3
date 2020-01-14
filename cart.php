<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form method="post">
          <input type="number" name="" value="" placeholder="Keuze">
          <input type="submit" name="User" value="Submit">
        </form>

    <?php

      session_start();
      if (isset($_POST["User"])) {
        setcookie("User", $_POST["User"]);
      }

    ?>

    </body>
</html>
