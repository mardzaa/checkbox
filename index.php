<!DOCTYPE html>
<html>

    <head>
<title>To Do List...</title>
<link rel="stylesheet" href="/style.css" />
    </head>

<body>

<form action="#" method="post">
 
<h2><center>Visu darāmo lietu saraksts</center></h2><br/>
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
<input type="checkbox" name="list" value="<b>Veikals</b> atzīmēts, kā izdarīts!" />Veikals <h6 class="answer2">Pievienots: Pirms 2 stundām.</h6><br/>
<input type="checkbox" name="list" value="<b>Iztīrīt mašīnu</b> atzīmēts, kā izdarīts!" />Iztīrīt māšīnu <h6 class="answer2">Pievienots: Pirms 3 stundām.</h6><br/>
<input type="checkbox" name="list" value="<b>Aizbraukt līdz jūrai</b> atzīmēts, kā izdarīts!" />Aizbraukt līdz jūrai <h6 class="answer2">Pievienots: Pirms 3 stundām.</h6><br/>
<input type="checkbox" name="list" value="<b>Noskriet 5km</b> atzīmēts, kā izdarīts!" />Noskriet 5km<h6 class="answer2">Pievienots: Pirms 4 stundām.</h6> <br/>
<input type="checkbox" name="list" value="<b>Noslaucīt putekļus</b> atzīmēts, kā izdarīts!" />Noslaucīt putekļus<h6 class="answer2">Pievienots: Pirms 4 stundām.</h6>
<input type="submit" name="ček" value="Atzīmēt kā izdarītu.." />
</form>
<?php
if (isset($_POST['list'])){
echo $_POST['list'];
}
?>
</body>

</html>