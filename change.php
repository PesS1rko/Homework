<?php

//error_reporting(0);

include_once("connect.php");

$id = $_GET['id'];

$result=mysqli_query($link,"SELECT id,author,text,date FROM newtable WHERE id='$id'");

$dbarray = mysqli_fetch_assoc($result);

if(isset($_POST['add']))
{
    $author = $_POST['author'];
    $text = $_POST['text'];
    mysqli_query($link," UPDATE newtable SET author = '$author',text = '$text' WHERE id='$id'");
    mysqli_close($link);
}
?>
<form method="post" action="change.php?id=<?php echo $id;?>">
Автор<br>
    <input type="text" name="author" value="<?php echo $dbarray['author']; ?>" ><br>
Текст<br>     
    <textarea rows="10" cols="40" name="text"><?php echo $dbarray['text']; ?></textarea><br>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
    <input type="submit" name="add" value="Редагувати">
</form><br><hr>
<a href="index.php">На головну</a>
