<form action="#" method="post">
<input type="checkbox" name="pievienot" value="pievienot"><a href="/pievienot.php">Pievienot</a></input>
<input type="checkbox" name="pievienot" value="dzest"><a href="/dzest.php">Labot</a></input>
<input type="submit" name="ček" value="Done"/>
</form>

<?php
if (isset($_POST['pievienot'])){
echo $_POST['pievienot'];
}
?>