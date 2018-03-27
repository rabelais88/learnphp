<!DOCTYPE html>
<html lang="kr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<body>
<div>
<form method="POST" action="postResult.php">
  <ul>
    <li><label>value A : <input type="number" name="valA"></label></li>
    <li><label>value B : <input type="number" name="valB"></label></li>
  </ul>
  <input type="submit" value="calculate(POST)">
</form>
<form method="GET" action="getResult.php">
  <ul>
    <li><label>value C : <input type="number" name="valC"></label></li>
    <li><label>value D : <input type="number" name="valD"></label></li>
  </ul>
  <input type="submit" value="calculate(GET)">
</form>
</div>
</body>
</html>