<?php
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

   
    $deleteSql = "DELETE FROM compromisso WHERE id = $delete_id";
    if (mysqli_query($conn, $deleteSql)) {
        echo "<script> 
                alert('Compromisso excluído com sucesso :(');
                window.location.href = 'verCompromissos.php';
            </script>";
    } else {
        echo "Erro ao excluir o compromisso: " . mysqli_error($conn);
    }
}

// Consulta para recuperar os compromissos
$sql = "SELECT id, descricao, data FROM compromisso";
$result = mysqli_query($conn, $sql);

