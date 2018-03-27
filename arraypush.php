<!DOCTYPE html>
<html>
<pre>
<?php
$numArray = array();
$aryMax = 20;
while( count($numArray) < $aryMax) {
  $num = mt_rand(1,30);
  if(!in_array($num,$numArray)){
    array_push($numArray,$num);
  }
}
print_r($numArray);

for($i=10;$i>0;$i--){
  echo "{$i}times";
}
?>
</pre>
</html>