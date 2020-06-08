<?php 
include_once '../base.php';

 $bottom=new DB('bottom');
 $row=$bottom->find(1);
 $row['bottom']=$_POST['bottom'];
$bottom->save($row);

to("../admin.php?do=bottom");

?>