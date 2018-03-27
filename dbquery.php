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
  <h1>PHP MYSQL custom query sample</h1>
</div>
<form>

  <div>
    <select name="direction">
      <option value="above">above</option>
      <option value="below">below</option>
      <option value="all">all ages</option>
    </select>
    <label for="age">age</label>
    <input type="number" name="age" />
  </div>
  <input type="submit" value="search">
</form>
<?php

$user = 'phpdev';
$pw = 'phpdev';

$dbname = 'learnphp';
$host= 'localhost';

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

$query = "SELECT * FROM member";

if(isset($_GET["age"])){
  if($_GET["direction"] === "above"){
    $query .= " WHERE age >= " . (String)$_GET["age"];
  }elseif($_GET["direction"] === "below"){
    $query .= " WHERE age <= " . (String)$_GET["age"];
  }
}

$query .= ";";
echo $query;

try{
  //db connection
  $pdo = new PDO($dsn,$user,$pw);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected to database";
  //basically search, insert and delete bare almost no difference
  //other than just SQL query statement

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