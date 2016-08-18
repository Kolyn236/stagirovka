<?php
    //echo "hello world!";
   // echo time();
/*function add ($param1, $param2){
    return $param1 + $param2;
}
    $a = $_GET['a'];
    $b = $_GET['b'];
    
    echo add ($a,$b);
    
    echo "<br>";
    for($i=0;$i<10;$i++){
        echo $i."<br>";
    }
*/
require_once("database.php");
require_once("models/articles.php");

$link = db_connect();
$articles = articles_all($link);

include("views/articles.php");

?>