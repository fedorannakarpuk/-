<?php 
$one = "Люблю читать кники, да и любую литературу";
$two = "Нравиться смотреть фильмы и сериалы";
$three = "Абсолютно ничего";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <title>Classwork</title>
    
 
    
</head>
<body>
<nav>
    <?php include "nav.php" ?>
</nav>

<div> 
   <p> Форма регистрации.</p> 
   <br>
   <br>
   <br>
   
   <span>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum optio, ipsum quae sunt minus. uod.
   </span>
   
</div>


<!--------------------------------------------------------->


<?php

    
    
    
    
  // если нажата кнопка со знач-ем   'submit', тогда выполнить следующее:
if(isset($_POST['submit'])){
    
    // ЭТА ЧАСТЬ КОДА ЗДЕСЬТ НЕ РАБОТАЕТ
   $str = $_POST['last_name'] . " : " . $_POST['first_name'] ." : " . $_POST['middle_name']. $_POST['email'] . " : " .$_POST['school_name'] . " : " .$_POST['phone'] . " : " . $_POST['post_code'] . " : " . $_POST['password'] ." : " . $_POST['confirm_password'] . PHP_EOL;  
    // эта константа позволяет коректно переносить
    
    
file_put_contents('users.txt', $str, FILE_APPEND);  // file_put_contents — Пишет данные в файл (позволяет дозописывать файл )                  /
    


} else{

// echo "Ошибка ввода";  эта строчка выводиться не смотря ни на что
?>

<!--   -----------  Теория к формам
required (причем нет значения в "") --  позволяет вывести окошко, в котором пишется, что данные не введены пользователем.

-->

<!--
Записфывает в файл первый кусок регистрации
-->


<div>
   <form action="post.php"
    method="POST">
    <input type="text" name="last_name" placeholder="Фамилия"><br>
    <input type="text" name="first_name" placeholder="Имя"><br>
    <input type="text" name="middle_name" placeholder="Отчество" ><br>
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="text" name="school_name" placeholder="Наименование учреждения"><br>
    <input type="tel" name="phone" placeholder="Телефон"><br>
    <input type="text" name="post_code" placeholder="Почтовый индекс"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="password" name="confirm_password" placeholder="Повторите пароль"><br>

 
 <br>
 
 
<!--    Добавляем Чекбокс для нашей формы  И оно выводит нам на экран только то, что нажато-->
   <input type='checkbox' name='chb-1' value="I like to read"><?=$one?><br>
<!--   Вопрос, можно ли в этой строке писать в значении целое предложение? -->
 <input type='checkbox' name='chb-2' value="watch"><?=$two?><br>
 <input type='checkbox' name='chb-3' value="nothing"><?=$three?><br><br>
 
  
    <input name="mycolor" type="radio" value="red">Красный<br>
 <input name="mycolor" type="radio" value="black">Черный<br>
   
<!--   Это сайт по формам во всей красе
  
  http://coderhs.com/archive/php_send_form
  -->
   <input  type="file" name="image"> <br><br>
   
    <input type="submit" name="submit" value="Зарегать меня!" class="submit"><br>
    <input type="reset" value="Очистить форму">
<!--   В этой форме показываються ошибки, если не введены любые данные -->
    

 </form> 
    
</div>
 





<?php
}
?>







</body>
</html>












