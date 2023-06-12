<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Compromissos</title>
</head>
<body>
    <h1>Agenda de Compromissos</h1>
 <div class="body" style="background-image: url('images/background.jpg');">
    <form method="POST" action="insere_dados.php">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Salvar">
        
          </div>
         
    </form>
     
     <div>
       <a href="calendario.php">
<button onclick="voltar()">Voltar</button>
         </div>
</body>
</html>
