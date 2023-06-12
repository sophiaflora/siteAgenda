<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if (empty($nome) || empty($user) || empty($email) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
    } elseif (strlen($senha) < 8) {
        echo "A senha deve ter no mínimo 8 caracteres.";
    } else {
       
       $servername ="db4free.net";
        $username = "banco_sophia";
        $password = "123456789";
        $dbname = "db_eventos";
        $conexao = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conexao) {
            die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }
        $consulta = "SELECT*FROM usuario WHERE user = '$user'";

        $resultado = mysqli_query($conexao, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            echo "<script>
                alert('Usuário já cadastrado');
                window.location.href = 'cadastro.php';
            </script>";
        } else {

        
        $query = "INSERT INTO usuario (nome, user, email, senha) VALUES ('$nome', '$user', '$email', '$senha')";

        if (mysqli_query($conexao, $query)) {
            echo  "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = 'index.php';
            </script>";
        } else {
            
            echo "<script>
                alert('Erro ao cadastrar o usuário');
                window.location.href = 'cadastro.php';
            </script>"; 
            
            mysqli_error($conexao);
            
        }

     
        mysqli_close($conexao);
    }
}
}
