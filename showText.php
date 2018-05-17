<?php
require('adminUtils.php');

if(!isset($_SESSION['user_id'])){
  $_SESSION['user_id']=0;
}
if(($_SESSION['user_id']>0)){
  require('adminMenu.php');
  echo '<table border=1 width=900>';
  echo '<tr><td>id</td><td>zawartość</td><td>akcje</td></tr>';
  $solution=$connection->query('SELECT * FROM tresc');
  if(!$solution) throw new Exception($connection->error);
  $row=$solution->fetch_all();

  foreach ($row as $key => $value) {
    $id=$value[0];
    $content=htmlspecialchars( $value[1]);
    // $id=$value['id'];


    echo "<tr><td>$id</td><td>$content</td><td><a href='editContent.php?id=$id'>edytuj</a></td></tr>";

  }
  echo '</table>';

}else{
  require('adminLogin.php');
}
?>
