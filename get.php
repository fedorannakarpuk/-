<?php

//  <form> action ="get.php" action="/search";
// <form> method "GET"  ot method "POST";
//<form> enctyp e="multipart/form-data"
    
//    "GET" все попадает в строку браузера ключ= знач-е/ Используеться в строке поиска, нельзя на логин ипароль. Размер строки адресной нельза более кб. ..../contacts это и есть get-параметр
    
    
//     enctype="multipart/form-data"
?>

<!--//name="search" это нас ключ-->

 <form action="search.php"
    method="GET">
     <input type="text" name="search">
     <input type="submit">
    
 </form>


<ul>
    <li><a href="page.php?page=1&page=2">Страница 1</a></li>   <!--  Знак ? говорит, что идут параметры-->
    <li><a href="page.php?page=2">Страница 2</a></li>
</ul>















