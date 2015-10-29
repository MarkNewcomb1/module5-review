
<table>
  <?php foreach($users as $user){ ?>
  <tr>
    <td><?= $user->getUID() ?></td>
    <td><?= $user->getName() ?></td>
    <td><?= $user->getPassword() ?></td>
    <td><?= $user->getMail() ?></td>
    <td><?= $user->getCreated() ?></td>
    <td><?= $user->getRole() ?></td>
    <td><a href='user.php?action=view_user&target=<?= $user->getUID() ?>' class='button'>view</a></td></td>
  </tr>
  <?php } ?>
</table>   
<br><br>
<a href='user.php?action=add_user' class='button'>Add New User</a>

<a href='login.php?action=logout' class='button'>Log Out</a>
 
    
    
    
    
