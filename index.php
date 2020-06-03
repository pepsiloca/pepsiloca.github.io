<?php

include_once "base.php";

$total=new db('total');


?>
<pre>
<?php print_r($total->del(['total'=>40]));?>
</pre>