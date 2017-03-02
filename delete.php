<?php
include_once("connect.php");
$id = $_GET['id'];
mysqli_query($link," DELETE FROM newtable WHERE id='$id' ");
mysqli_close($link);
echo "Complite";

?>
<br><hr>
<a href="index.php">На головну</a>