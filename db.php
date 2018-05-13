<?php

try{
       $connection = new mysqli('localhost','root','','kurs');
       mysqli_set_charset($connection,"utf8");
       if($connection->connect_errno!=0){
           throw new Exeption(mysqli_connect_errno());}
         }catch(Exception $e){
                echo '<span style="color:red">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie</span>';
                echo '<br/> info dev:'.$e;
            }

function readContent($id){
 global $connection;

      $solution=$connection->query('SELECT content FROM tresc WHERE id = '.$id);
       if(!$solution) throw new Exception($connection->error);
       $row=$solution->fetch_assoc();


  return $row["content"];
}

function randomQuote(){
  global $connection;

    $solution = $connection -> query('SELECT * FROM quotes ORDER BY RAND() LIMIT 1');
    if(!$solution) throw new Exception($connection->error);
    $row=$solution->fetch_assoc();

    return $row;

}
function lastNews(){
  global $connection;

    $solution = $connection -> query('SELECT * FROM `news` ORDER BY `news`.`id` DESC');
    if(!$solution) throw new Exception($connection->error);
    $row=$solution->fetch_all();

    return $row;

}

?>
