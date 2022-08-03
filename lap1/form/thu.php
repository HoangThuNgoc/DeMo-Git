<?php
$a = 9;
function abc(&$b)
{ $b=$b++-2;
return $b;
}
abc($a);
echo $a;
?>
