
<ul>
  <li><?= $user->getUID() ?></li>
  <li><?= $user->getName() ?></li>
  <li><?= $user->getPassword() ?></li>
  <li><?= $user->getMail() ?></li>
  <li><?= $user->getCreated() ?></li>
</ul>

<a href='user.php' class='button'>View All Users</a> 
<a href='user.php?action=delete_user&target=<?= $user->getUID() ?>' class='button'>Delete This User</a>
<a href='user.php?action=edit_user&target=<?= $user->getUID() ?>' class='button'>Edit This User</a>


