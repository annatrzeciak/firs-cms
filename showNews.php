<?php
require('adminUtils.php');

if(!isset($_SESSION['user_id'])){
  $_SESSION['user_id']=0;
}
if(($_SESSION['user_id']>0)){
  require('adminMenu.php');
  

}else{
  require('adminLogin.php');
}
?>
