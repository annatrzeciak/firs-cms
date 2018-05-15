<?php
require ('db.php');
session_start();
function login($login, $password){

  global $connection;

  $solution=$connection->query("SELECT id FROM users WHERE login = '".$login."' AND  password = '".$password."'");

  if(!$solution) throw new Exception($connection->error);
  else{
    $row=$solution->fetch_assoc();
    return $row;
  }
}

function printForm(){
  echo '<form method="post" action="">';
  echo 'Login: <input name="login" type="text"><br>';
  echo 'Hasło: <input name="password" type="password"><br>';
  echo '<input type="submit" value="Zaloguj"><br></form>';
}

?>
