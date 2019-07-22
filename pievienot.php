<!DOCTYPE html>
<html>

    <head>
<title>To Do List...</title>
<link rel="stylesheet" href="style.css" />
    </head>

<body>

<form action="#" method="post">
 
<h2><center><b>Pievienot</b> darāmo lietu sarakstam...</center></h2><br/>
<hr>
<div class="body"></div>
<div class="answer">
      <h3><a href="/pievienot.php">Pievienot sarakstam</a></h3>
    </div>

    <div class="answer">
      <h3><a href="/labot.php">Labot sarakstu</a></h3>
    </div>

    <div class="answer">
      <h3><a href="/dzest.php">Dzēst no saraksta</a></h3>
    </div>
  </div>
<hr>
<input type="text-area" name="list" value="Kas jādara?!" /><br><br>
<input type="submit" name="save" value="Pievienot" />
</form>
<?php
if (isset($_POST['list'])){
echo $_POST['list'];
}
?>
</body>

</html>