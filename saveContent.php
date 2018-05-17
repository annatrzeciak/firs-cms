<?php
require('adminUtils.php');

if(!isset($_SESSION['user_id'])){
  $_SESSION['user_id']=0;
}
if(($_SESSION['user_id']>0)){
  require('adminMenu.php');

  $new_content = $_POST['text'];
  $id=$_POST['id'];
  $solution=$connection->query("UPDATE tresc SET content='".$new_content."' WHERE id=".$id);
  if(!$solution) throw new Exception($connection->error);
  header("Location: showNews.php");

}else{
  require('adminLogin.php');
}
?>
