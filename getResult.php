<!DOCTYPE html>
<html>
<meta charset="utf-8">
<?php
  $varC = $_GET["valC"];
  $varD = $_GET["valD"];
  function getPow($varA,$varB){
    return (int)$varA * (int)$varB;
  }
  $result = getPow($varC,$varD);
  echo "GET RESULT: " . $result;

?>
</html>