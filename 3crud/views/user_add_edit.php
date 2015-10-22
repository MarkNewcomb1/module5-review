<form action="user.php" method="get">
  <input type="hidden" name="uid" value="<?= $user->getUID() ?>">
  <input type="hidden" name="action" value="save_user">
  
  <label>Name: </label><input type="text" name="name" value="<?= $user->getName() ?>"><br>
  <label>Email: </label><input type="text" name="mail" value="<?= $user->getMail() ?>"><br>
  <label>Password: </label><input type="text" name="pass" value=""><br>
  <input type="submit" value="Save"  class='button'>
</form>
