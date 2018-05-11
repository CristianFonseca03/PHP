<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>ejemplo PHP</title>

  </head>
  <body background="images/1.gif">
    <audio src="sound/marcianito.mp3" autoplay loop>
      <p>Tu navegador no implementa el elemento audio</p>
    </audio>
    <form action="script.php" method="post">
      Nombre <input type="text" name="name"><br>
      Edad <select name="age">
        <?php
        for ($x=12; $x <= 120 ; $x++) {
          echo "<option>$x</option>";
        } ?>
      </select><br>
      Genero <input type="radio" value="F" name="gender">
             <input type="radio" name="gender" value="M"><p>
      <input type="submit"><input type="reset">
    </form>
  </body>
</html>
