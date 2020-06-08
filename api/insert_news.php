<?php
include_once "../base.php";

$news=new DB('news');
$text=$_POST['text'];
$sh=1;


$news->save(['text'=>$text,'sh'=>$sh]);

to("../admin.php?do=news");

?>