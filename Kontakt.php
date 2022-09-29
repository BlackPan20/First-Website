<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kontakt</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

@media(max-width: 650px){
    form{
        height: 100%;
        width: 100%;
        justify-content: center;
    }
    .inputs_container{
        margin: 80px;
    }
    h1{
        font-size: 32px;
    }
}
</style>
</head>
<body>

<?php
    if(isset($_POST["submit"])){
      mail("jonasdoering2008@gmail.com", "Kontaktformular", 'Name: '.$_POST["firstname"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nachricht: '.$_POST["message"]);
      ?>
      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>

<h3>Kontakt Formular</h3>

<div class="container">
<form action="Kontakt.php" method="post">
    <label for="fname">Vorname</label>
    <input type="text" id="fname" name="firstname" placeholder="Vorname..">

    <label for="lname">Nachname</label>
    <input type="text" id="lname" name="lastname" placeholder="Nachname..">

    <label for="country">Thema</label>
    <select id="country" name="country">
      <option value="website">Website</option>
      <option value="eschwerde">Beschwerde</option>
      <option value="sonstiges">Sonstiges</option>
    </select>

    <label for="subject">Problem</label>
    <textarea id="subject" name="subject" placeholder="Beschreibung.." style="height:200px"></textarea>

    <input type="submit" value="Senden">
  </form>
  <a href="Test.html">Zurück</a>
</div>

</body>
</html>
