<?php
  include 'includes/users.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="calc.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
      <option> value="add">Add</option>
      <option> value="sub">Subtract</option>
      <option> value="mul">Multiple</option>
    </select>
    <button type="submit">Calculate</button>
</form>


<?php

?>

</body>
</html>
