<?php
  foreach($error_msg as $err){
    print "<b>" . $err . "</b><br>";
  }
?>

<form name="login" action="login.php" method="get">
  
  <input type="hidden" name="action" value="login" required>
  
  <label for="name">Name</label>
  <input type="text" name="username" placeholder="username" value="<?= $username ?>" required>
  
  <label for="password">Password</label>
  <input type="password" name="password" placeholder="password" value="<?= $password ?>" pattern=".{5,10}" title="5 to 50 characters" required>
  
  <input type="submit" value="Login" class="button">

</form>



