<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" rel="stylesheet">
    <title>Classwork</title>
</head>

<body>
    <nav>
        <?php include "nav.php" ?>
    </nav>

    <div>
        <hr>
        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 1 (Самостоятельная работа)
            Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
            строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
            "a-g" на пустоту.
            <br>
            <br>
        </p>

        <?php
    
    // Наше первое задание
         $Shakespeare="To be or not to be";
        echo "Наша исходная строка: ".$Shakespeare."<br>";
        // iconv_strlen() - Возвращает количество символов в строке
        $our_string =iconv_strlen($Shakespeare);
       echo "Количество символов в строке (с учетом пробелов) = " . $our_string ."; <br>";  
         
        if($our_string > 10){
            // substr -- функция, которая обрезает с 0 по 10 включительно символы
        echo "Hаша строка при сокрощении до 10 символов: ". substr($Shakespeare, 0, 10)."; <br>" ; 
        }
        
        $initial_value = 'o'; 
$final_value = ' ';
echo "Заменяем значения букв 'o' на пустоту: " .str_replace($initial_value, $final_value, $Shakespeare). "; <br>";
echo "Проверка на количество символов в измененной строке: " . iconv_strlen(str_replace($initial_value, $final_value, $Shakespeare)). ";<br><br><br>" ;
          
        
        ?>

        <hr>
        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 2 (Самостоятельная работа)Взять Html разметку: Удалить все html теги. Вывести количество символом после фильтрации.<br>
            <br>
        </p>


        <?php
        
        $text_html = "<div class= 'refnamediv'><h1>htmlspecialchars</h1> <p> (PHP 4, PHP 5, PHP 7)</p><p class= 'refpurpose'><span class='refname' > htmlspecialchars</span> — <span class= 'dc-title'>Любой текст</span></p></div>";
        
        echo "Выводим нашу разметку согласна заданию: ".$text_html."<br>";
        echo "Посчитаем количество символов в строке с учетом тегов =  ".iconv_strlen($text_html).";<br>";
        
        $text_html_filtr = strip_tags($text_html);
        
        echo "Выводим нашу разметку после фильтрации : ". $text_html_filtr."<br>";
        echo "Посчитаем количество символов в строке после фильтрации =  ".iconv_strlen($text_html_filtr).";<br><br><br>";
        
        ?>

        <hr>

        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 3 (Самостоятельная работа) Найти и заменить в строке "http://example.com/user/username" user на author; Вывести результат на экран.<br>
            <br>
        </p>


        <?php 
        $search = 'user'; 
$replace = 'author';
$subject = "http://example.com/user/username";
echo "Наша измененная строка: ".str_replace($search, $replace, $subject)."<br><br><br>";
        
        
        
        ?>



 <hr>

        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 4 (Самостоятельная работа) Отсортировать массивам [1,22,45,3,23,45,6,76,55,4] по возврстанию;.<br>
            <br>
        </p>

<?php
        //  Проблемы с сортировкой массива
        $our_arr = [1,22,45,3,23,45,6,76,55,4];
     print_r($arr_sort =  asort($our_arr,SORT_FLAG_CASE))."<br><br><br><br><br><br>"  ;
        
//        $arr_sort =  arsort($our_arr) ;
        
//   print_r($our_arr);
 
        
        
//        foreach ($our_arr as $key) {
//    print_r( $key = asort ( $our_arr))."<br>";
//}
//        
        
//      echo  asort ( $our_arr) ;
        
//        echo sort($our_arr);
        
//echo " ytdgfyu:   " . $arr_sort ;
        
//        for($i=0; $i<10; $i++){
////            arsort($our_arr) ;
//        echo asort($our_arr);
//        }
        
        
        ?>


<hr>

        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 5 (Самостоятельная работа) Преобразовать строку "Find me and say Hello Mike!" в массив.<br>
            <br>
        </p>

<?php

        $our_str= "Find me and say Hello Mike!";
        $new_our_str=  str_split($our_str, 1);
        echo "Каждая буква страки будет отдельным значением в массиве: <br>";
        print_r($new_our_str)."<br><br><br><br>";
    
?>

<hr>

        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 6 (Самостоятельная работа) Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";<br>
            <br>
        </p>

<?php
        

        
        
//        echo "Каждая буква страки будет отдельным значением в массиве: <br>";
//        print_r($new_our_str)."<br><br><br><br>";
        print_r(array_count_values($new_our_str))."<br><br><br><br>";
        
       
//$findme   = 'a';
//$pos = strpos($new_our_str, $findme);
//print_r($pos);

        echo strpbrk($new_our_str, 'a');
        
        

    
?>


<hr>

        <p style=" text-align:justify; font-size: 23px; text-decoration: underline"> Задание 7 (Самостоятельная работа) Дан урл "http://example.com/name=Mike''lastname=Jackson''age=25", необходимо разбить и вытащить параметры и вывести на экран.<br>
            <br>
        </p>

<?php
        
        $url = "http://example.com/name=Mike&lastname=Jackson&age=25";
        print(parse_url($url, PHP_URL_QUERY)); 
        
        
        
        
        
        ?>


















    </div>









</body>

</html>
