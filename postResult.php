<!DOCTYPE html>
<html>
<meta charset="utf-8">
<?php
  $varA = $_POST["valA"];
  $varB = $_POST["valB"];
  function getSum($varA,$varB){
    return (int)$varA + (int)$varB;
  }
  $result = getSum($varA,$varB);
  echo "POST RESULT: " . $result;

?>
</html>