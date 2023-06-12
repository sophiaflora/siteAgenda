<?php
   
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";
   
    $tenta_conectar =  new mysqli($servername,$username,$password,$dbname);
    if($tenta_conectar->connect_error === TRUE)
    {    die("Deu erro na conexão ". $tenta_conectar->connect_error);}
    
  
session_start();
    $user=$_POST['user'];
    $senha=$_POST['senha'];
    
    $tenta_achar = "SELECT * FROM usuario WHERE user='$user' AND senha='$senha'" ;
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        header("Location: calendario.php");
    exit;
       
           
} else{	
        session_unset();
        session_destroy();
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.php';
            </script>";
      }
