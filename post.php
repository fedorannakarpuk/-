<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Classwork</title>
</head>
<body>
    
<nav>
    <?php include "nav.php" ?>
</nav>
 
 
 <div>
     <p> Сейчас выведем все значения, которые писал пользователь в своей форме</p>
     
     <br>
     <br>
     <br>
 

 <?php
  
   
    // это проверка верности пароля, только нужно сделать, тчобы не перекидывало страницу.А оставалось на тойже !!!!!
if($_POST['password'] != $_POST['confirm_password']){
    print_r("Введеные вами пароли не совпадают. Попробуйте еще раз");
}

//    "POST" 
    //placeholder  -- позволяет скрым цветом изначально писать в поле
    
//     enctype="multipart/form-data"

// т.к. формы помещены на однуу страницу, мы должны уточнить, была ли нажата наша кнопка

// isset($_POST['checkbox'])
    
if(isset($_POST['submit']) ){
    // можем сох-ть инф-ю в файлах, в БД и так далее. Можем сох-ть в сессию
    // параметр или все значение
//    file_put_contents(filename:'users.txt', data:'' );
    
       $str = $_POST['last_name'] . ":" . $_POST['first_name'] .":" . $_POST['middle_name']. ":" . $_POST['email'] . ":" .$_POST['school_name'] . ":" .$_POST['phone'] . ":" . $_POST['post_code'] . ":" . $_POST['password'] .":" . $_POST['confirm_password'] . ":"  . $_POST['chb-1'] . ":" . $_POST['chb-2'] . ":" . $_POST['chb-3']. ":" . $_POST['mycolor'] . ":". $_POST['image'].PHP_EOL;  
    // эта константа позволяет коректно переносить
    
    
    
    
    
    
   
file_put_contents('users.txt', $str, FILE_APPEND);  // file_put_contents — Пишет данные в файл (позволяет дозописывать файл )
    
  
    
    
    $users=file('users.txt');
foreach ($users as $user){
    $text=explode(':',$user);

    
 
    ?>
  
    <div style="display:flex;border:3px solid green; padding:20px 60px;">
      
      <div>
          <span> 
          
          <?php 

    
    for($i=0; $i<=15;){
        print ("  " . $text[$i++] . " <br>\n");
    }
    
            
              ?>
          
          </span>
      </div>
   
       <img src="/images/<?=$text[13];?>" alt="">
        
    </div>
        
    
    
 <?php   
};


    
    
    
    /////////////////////////////////////////////////////
    echo "<pre>";
    //с помощью этой строчки нам выводит все, что мы ввели в форму
    var_dump($_POST);
//    var_dump($str);
    echo "</pre>";
    
// Минус, что выводит даже пароль.  Мы должны его закешировать.

    
    
    
//    echo $_POST['name'];
    echo strip_tags($_POST['name']);  //эта фун-я бузопаснотсти. Он авырезает все тен=ги, если передавать их в строку. Вторым аргументом мы можем передать, что не обюрезать
    echo htmlspecialchars ($_POST['name']);  // переводит все  html-теги в безопасные функции/ Называються безоопасные html- сущности
    
} else{
    
echo "<pre>";
//    var_dump($str);
    echo "</pre>";
    
?>

 



<?php
};
?>





</div>










<footer>
    <?php include "footer.php";

    ?>
</footer>


</body>
</html> 





