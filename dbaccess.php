<style>
  th{
    min-width:100px;
    border-bottom:solid 2px black;
  }
  td{
    min-width:100px;
  }
  tr:nth-child(even){
    background-color:lightgray;
  }
</style>
<div>
  <h1>PHP MYSQL DB load sample</h1>
  <a href="dbquery.php">try query</a>
</div>

<?php

$user = 'phpdev';
$pw = 'phpdev';

$dbname = 'learnphp';
$host= 'localhost';

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
try{
  //db connection
  $pdo = new PDO($dsn,$user,$pw);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected to database";
  //basically search, insert and delete bare almost no difference
  //other than just SQL query statement
  $query = "SELECT * FROM member";
  $stm = $pdo->prepare($query);
  $stm->execute();
  $res = $stm->fetchAll(PDO::FETCH_ASSOC);

echo <<< HTML
<table>
  <thead>
    <tr>
      <th> ID </th>
      <th> name </th>
      <th> age </th>
    </tr>
  </thead>
  <tbody>
HTML;

foreach($res as $row){
echo <<<HTML
  <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[age]</td>
  </tr>
HTML;
}

echo <<<HTML
  </tbody>
</table>
HTML;

}catch(Exception $e){
  echo '<span class="error">error!</span></br>';
  echo $e->getMessage();
  exit();
}
?>

<form method="POST" action="/learnphp/dbaccess.php">
  <h2>add new item</h2>
  <table>
    <thead>
      <tr>
        <th>name</th>
        <th>age</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="name"></td>
        <td><input type="number" name="age"></td>
      </tr>
    </tbody>
  </table>
  <input type="submit" value="add this item">
</form>

<?php
if(isset($_POST['name']) && isset($_POST['age'])){

  try{

    $name = $_POST["name"];
    $age = $_POST["age"];
    $query = "INSERT INTO member (name, age) VALUES ( :name , :age );";
    $stm = $pdo->prepare($query);
    $stm->bindValue( ':name', $name, PDO::PARAM_STR);
    $stm->bindValue( ':age', $age, PDO::PARAM_INT);

    if($stm->execute()){
      echo "new member is added";
      header('Location: dbaccess.php'); 
    }
  }catch(Exception $e){
    echo '<span class="error">error!</span></br>';
    echo $e->getMessage();
    exit();
  }    
}
?>