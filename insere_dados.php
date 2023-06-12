<?php
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['data']) && isset($_POST['descricao'])) {
        // Obtém os valores do formulário
        $data = $_POST['data'];
        $descricao = $_POST['descricao'];


     
        session_start();
        $user = $_SESSION['user'];

      
        $query = "SELECT * FROM usuario WHERE user = '$user'";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
           
            $query = "INSERT INTO compromisso (user, data, descricao) VALUES ('$user', '$data', '$descricao')";
                
            if (mysqli_query($conexao, $query)) {
                echo "<script> 
                alert('Compromisso cadastrado com sucesso!');
                window.location.href = 'calendario.php';
            </script>";
                
} else {
    echo "Nenhum compromisso cadastrado.";
}
            } else {
                echo "<script> 
                alert('Erro ao cadastrar!');
                window.location.href = 'calendario.php';
            </script>" . mysqli_error($conexao);
            }
        } else {
            echo "Usuário não encontrado na tabela de usuários.";
        }
    }



mysqli_close($conexao);
