<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){
    if($user = login($_POST['login'], $_POST['password'])){
      //poprawne zalogowanie
      $_SESSION['user_id']=$user['id'];
      $_SESSION['user_login']=$user['login'];

      header('Location: admin.php');
    }else{
      //błędne zalogowanie
      echo "Podałeś niepoprawne dane do logowania";
      printForm();
    }
  }else{
    echo 'Zaloguj się ';
    printForm();
  }

 ?>
