<a href="add.php">Додати статтю</a><br>


<?php
error_reporting(0);
include_once("connect.php");
$result = mysqli_query($link,"SELECT * FROM newtable");
$_GET['id'] = $mas['id'];


while($mas = mysqli_fetch_array($result))
{
    echo $mas['author']."<br>"."<br>".$mas['text']."<br>"."<br>".$mas['date']."<br>"."<br>";?>
    <a href="change.php?id=<?php echo $mas['id']?>">Редагувати статтю</a><br>         <a href="delete.php?id=<?php echo $mas['id']?>">Видалити статтю</a><br><hr>
<?php
}
mysqli_close($link)
    //
?>
    
