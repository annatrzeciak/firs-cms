<?php
require('adminUtils.php');

if(!isset($_SESSION['user_id'])){
  $_SESSION['user_id']=0;
}
if(($_SESSION['user_id']>0)){
  require('adminMenu.php');

  echo "Edytuj treść strony";

  $id=$_GET['id'];

  $solution=$connection->query("SELECT * FROM tresc WHERE id=".$id);
  if(!$solution) throw new Exception($connection->error);
  $row=$solution->fetch_assoc();
  $content = $row['content'];
  ?>
  <form method="post" action="saveContent.php">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <textarea cols="100" rows="20" name='text'>
      <?php echo $content ?>
    </textarea><br>
    <input type="submit" name="" value="Zapisz">
  </form>
  <?php

}else{
  require('adminLogin.php');
}
?>
