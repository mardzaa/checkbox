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
<div><a href="/pievienot.php">Pievienot sarakstam</a>
<a href="/labot.php">Labot sarakstu</a> 
<a href="/dzest.php">Dzēst no saraksta</a></div><br>
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