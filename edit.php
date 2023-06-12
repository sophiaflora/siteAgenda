<?php
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, descricao, data FROM compromisso WHERE id = $id";
    $result = mysqli_query($conn, $sql);

  
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $descricao = $row['descricao'];
        $data = $row['data'];

     
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $descricao = $_POST['descricao'];
            $data = $_POST['data'];

            $updateSql = "UPDATE compromisso SET descricao = '$descricao', data = '$data' WHERE id = $id";
            if (mysqli_query($conn, $updateSql)) {
                echo "<script> 
                alert('Compromisso atualizado com sucesso :)');
                window.location.href = 'verCompromissos.php';
            </script>";
            } else {
                echo "Erro ao atualizar o compromisso: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Compromisso não encontrado.";
    }
} else {
    echo "ID do compromisso não fornecido.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Compromissos</title>
</head>
<body>
    <h1>Editar Compromissos</h1>
     <div class="body" style="background-image: url('images/background.jpg');">

    <form method="POST" action="">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="<?php echo $descricao; ?>"><br>

        <label for="data">Data:</label>
        <input type="date" name="data" value="<?php echo $data; ?>"><br>

        <input type="submit" value="Atualizar">
    </form>
<div>
       <a href="calendario.php">
<button onclick="voltar()">Voltar</button>
         </div>
</body>
</html>
