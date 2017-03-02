<form method="post" action=" ">
Автор<br>
    <input type="text" name="author" ><br>
Текст<br>     
    <textarea rows="10" cols="40" name="text"></textarea><br>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
    <input type="submit" name="add" value="Додати">
</form><br><hr>
<a href="index.php">На головну</a>

<?php
error_reporting(0);// так як кнопка "Додати" не натиснута то mysqli_close() не знає що таке $link  ш тому видаєтья помилка рівня WARNING
if(isset($_POST['add']))
{
include_once("connect.php");
$author = $_POST['author'];
$text = $_POST['text'];
$date = $_POST['date'];
}
@mysqli_query(@$link," INSERT INTO 
        newtable(author,text,date) 
        VALUES ('$author','$text','$date')");
    mysqli_close(@$link);





?>