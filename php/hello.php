<?php
$sql = new mysqli('localhost', 'root', '', 'php');
$result = $sql ->query ("SELECT * FROM `telefon`");
$data = $result->fetch_all();

print_r($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Список телефонов</h1>
    
    <?php
    foreach($data as $item){
    ?>
    <div class="news">
        <div class="news-title"><?php echo $item[1] ?></div>
        <div class="news-description"><?php echo $item[2] ?></div>
        <div class="news-date"><?php echo $item[3] ?></div>
        <div class="btns">
            <a href="edit.php?id=<?php echo $item[0] ?>">Редактировать</a>
            <a href="delite.php?id=<?php echo $item[0] ?>">Удалить</a>
            
        </div>
    </div>
    <?php
   }
   ?>
    <form action="add.php" method="POST">
        <input type="text" placeholder="Введите название цацки"  id='name'  name="name">
        <input type="text" placeholder="Введите номер образины"  id='model'  name="model">
        <input type="text" placeholder="Введите балдёжную цену"  id='prise'  name="prise">
        <input type="text" placeholder="Введите всякую дичь для покупателя" id='description'  name="discription">
        
        <button>Добавить</button>
    </form>
</body>
</html>
