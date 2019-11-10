<?php

$page = isset($_GET['page']) ? $_GET['page'] : 0;

//echo $page;

switch ($page){
    case '1':
        break;
    case '2':
        inclide "page-2.php";
        break;
        default;
        include "search.php";
}


?>
<?php

echo "Каталог";