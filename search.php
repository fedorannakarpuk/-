<?php


$search = isset($_GET['search']) ? $_GET['search']:0;
//echo "<pre>";
//echo "вы искали строку $search";


include "page-".$search."php";
//echo "</pre>";
?>