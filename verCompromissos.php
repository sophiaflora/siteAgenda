
<?php
// Conecte-se ao banco de dados
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifique se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Consulta para recuperar os compromissos
$sql = "SELECT id, data, descricao FROM compromisso";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compromissos</title>
</head>
<body>
    <h1>Compromissos</h1>
    <div class="body" style="background-image: url('images/background.jpg');">

    <table>
        <tr>
            <th>Data</th>
            <th></th>
            <th></th>
            <th>Descrição</th>
        </tr>
        <?php
        // Exiba os compromissos na tabela
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["data"] . "</td>
                    <th></th>
                     <th></th>";
                        
                echo "<td>" . $row["descricao"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Editar</a></td><th></th>
                     <th></th>";
                echo "<td><a href='delete.php?delete_id=" . $row["id"] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum compromisso encontrado.</td></tr>";
        }
        ?>
    </table>

</body>
</html>
