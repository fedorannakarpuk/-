<?php

    require_once "header.php";
    require_once "header.php";
    include "main.php";
    include "footer.php";
    $name = 'Tom';

    function getSum($args, $item = 'Home', $name) {

    }

    getSum(1);

?>
<?php

if(isset($_POST['submit'])){
//   $str = $_POST['name'] . ":" . $_POST['sex'] . $_POST['color'] . PHP_EOL;  // эта константа позволяет коректно переносить
file_put_contents('users.txt', $str, FILE_APPEND);  // позволяет дозописывать файл/
    


} else{
// echo "Ошибка ввода";
?>

<ul style="display:flex;">
    <li style=" margin:0 25px"><a href="contacts.php">Contacts</a></li>
    <li style=" margin:0 25px"><a href="about.php">About</a></li>
    <li style=" margin:0 25px;"><a href="form.php">Registration</a></li>
</ul>


 <form action=""
    method="POST" enctype="multipart/form-data">
<!--
     <input type="text" name="name" placeholder='Name'>
     <input type="text" name="sex" placeholder='Sex'>
     <input type="text" name="color" placeholder='Color'>
-->
     <input  type="text" name="login" placeholder='Login'>
     <input  type="text" name="email" placeholder='Email'>
     <input  type="text" name="password" placeholder='Password'>
     <input  type="file" name="image">
     <input type="submit" name="submit" value="Show me">    
 </form>


<?php
}

//$file=$_FILES['file'];
//$user=$_POST;
//$dir='uploads';
// if(!file_exists($dir)){
//     mkdir($dir,0777);
// }

//
//$file_name=$dir.'/'.$file['name'];
//$line=$file_name . ':' . $user['login'];
//if(move_uploaded_file($file['tmp_name'], $file_name)){
//    echo "Файл успешно загружен";
//}else{
//    echo"Возникла ошибка при загрузке файла";
//}


if(isset($_POST['submit'])){
    
    $file=$_FILES['image'];
    $login=strip_tags($_POST['login']);
    $email=strip_tags($_POST['email']);
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $filename='images/'. $file['name'];
    $line=$login.":".$email . ":" .$passwordHash . ":" . $filename . PHP_EOL;
    
    file_put_contents('users.txt', $line, FILE_APPEND);

    if(move_uploaded_file($file['tmp_name'],$filename)){
        echo "Успешно";
    }else{
        echo "Ошибка";
    }
    
}


$users=file('users.txt');
foreach ($users as $user){
    $text=explode(':',$user);
//    var_dump($text);
    ?>
  
    <div style="display:flex;border:3px solid green; padding:15px;">
      
       <img src="<?=$text[3];?>" alt="">
        
    </div>
        
    
    
 <?php   
}
?>


















