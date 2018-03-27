<?php

$user = 'phpdev';
$pw = 'phpdev';

$dbname = 'learnphp';
$host= 'localhost';

$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
try{
  $pdo = new PDO($dsn,$user,$pw);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected to database";
  $pdo = NULL;
}catch(Exception e){
  echo '<span class="error">error!</span></br>';
  echo $e->getMessage();
  exit();
}
?>