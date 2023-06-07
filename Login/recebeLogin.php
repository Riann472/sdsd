<?php
session_start();
 // print_r($_REQUEST);
 if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
  include_once('conexao.php');
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  // print_r("Login: " . $login);
  // print_r("Senha: " . $senha . "<br>");
 
 $sql = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
 $result = $con->query($sql);
 //print_r($sql);
 //print_r($result);
 
 if(mysqli_num_rows($result) < 1){
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('Location: log.html');

} else{
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  header('Location: principal.php');
}
} else{
 header('Location: log.html');
}

?>  