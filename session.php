<?php
  //session always comes upfront
  //if it's behind any other(i.e. require_once/require)
  //then it would cause error
  session_start();
?>

<h1>Storing in session!</h1>

<form method="post" action="session.php">
  <label for="storage">value :</value>
  <input type="text" name="storage" placeholder="value you want to store"
  value="
  <?php
  if(isset($_GET["req"])){
    if($_GET["req"] === "true"){
      echo $_SESSION["storage"];
    }
  }
  ?>">
  <input type="submit" value="store"></input>
</form>
<form method="get" action="session.php">
  <input type="hidden" name="req" value="true">
  <input type="submit" value="get storage from session">
</form>

<?php
  if(isset($_POST["storage"])){
    $_SESSION["storage"] = $_POST["storage"];
  }
?>
