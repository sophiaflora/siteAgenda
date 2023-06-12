
<?php
$servername ="db4free.net";
$username = "banco_sophia";
$password = "123456789";
$dbname = "db_eventos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}


$sql = "SELECT id, data, descricao FROM compromisso";
$result = mysqli_query($conn, $sql);

if (isset($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);

    
    $sql = "SELECT id, data, descricao FROM compromisso WHERE descricao LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);

  
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compromissos</title>
</head>
<body>
    <h1>Compromissos</h1>
    <div class="body" style="background-image: url('images/background.jpg');">

          <form method="POST" action="">
        <input type="text" name="search" placeholder="Pesquisar compromissos">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        
        
    <table>
        <tr>
            <th>Data</th>
            <th></th>
            <th></th>
            <th>Descrição</th>
        </tr>
        <?php
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
            echo "<script> 
                alert('Nenhum compromisso encontrado!');
                window.location.href = 'calendario.php';
            </script>";
        }
        
        
        ?>
    </table>

</body>
</html>
