<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      mail("jonasdoering@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nachricht: '.$_POST["message"]);
      ?>
      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>
    <form action="Kontakte.php" method="post">
      <input type="text" name="name" placeholder="Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <select name="priorität">
        <option value="hoch">Web Problem</option>
        <option value="mittel">App Problem</option>
        <option value="gering">Sonstiges</option>
      </select><br>
      <textarea name="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    </form>
  </body>
</html>