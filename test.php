<!DOCTYPE html>
<html>
<pre>
<?php
$var1 = "this is variable 1";
$var2 = "this is variable 2";
?>
<body>
here comes the value 1 <?php echo $var1; ?></br>
here comes the value 2 <?php echo $var2; ?></br>
<?php
$vara = 3;
$varb = 5;
$varc = $vara+$varb;
print $vara . "+" . $varb . "=" . $varc;
print "global<br/>"; var_dump( $GLOBALS );
print (($vara <=> $varb). "/");

print (NULL ?? 2);
?>
</pre>
</body>
</html>