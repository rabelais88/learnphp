<?php
require_once("classtest.php");
?>
<div><p>this document reads other document's setup</p></div>

<div>
<?php
  
$person1 = new person("name",36);
$person2 = new person("john",51);

  echo $person1->getName();
  echo $person1->getAge();
  echo $person1->getMoney();

  echo $person2->getName();
  echo $person2->getAge();

?>
</div>