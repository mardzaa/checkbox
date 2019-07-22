<!DOCTYPE html>
<html>

    <head>
<title>To Do List...</title>
<link rel="stylesheet" href="style.css" />
    </head>

<body>

<form action="#" method="post">
 
<h2><center><b>Labot</b> darāmo lietu sarakstu...</center></h2><br/>
<hr>
<div><a href="/pievienot.php">Pievienot sarakstam</a>
<a href="/labot.php">Labot sarakstu</a> 
<a href="/dzest.php">Dzēst no saraksta</a></div><br>
<hr>
<input type="checkbox" name="list" value="<b>Veikals</b> atzīmēts, kā izdarīts!" />Veikals<br/>
<input type="checkbox" name="list" value="<b>Iztīrīt mašīnu</b> atzīmēts, kā izdarīts!" />Iztīrīt māšīnu<br/>
<input type="checkbox" name="list" value="<b>Aizbraukt līdz jūrai</b> atzīmēts, kā izdarīts!" />Aizbraukt līdz jūrai<br/>
<input type="checkbox" name="list" value="<b>Noskriet 5km</b> atzīmēts, kā izdarīts!" />Noskriet 5km <br/>
<input type="checkbox" name="list" value="<b>Noslaucīt putekļus</b> atzīmēts, kā izdarīts!" />Noslaucīt putekļus
<input type="submit" name="ček" value="Labot atzīmēto" />
</form>
<?php
if (isset($_POST['list'])){
echo $_POST['list'];
}
?>
</body>

</html>