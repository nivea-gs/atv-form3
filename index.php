<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples Da Nívea</title>
</head>
<body>

    <h2>Formulário de Tarefas e Atrasos</h2>

    <form action="calcula.php" method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0" required>
        </div>
        <br>
        <div>
            <label for="atrasos">Número de Tarefas:</label>
            <input type="number" id="tarefas" name="tarefas" min="0" value="0" required>
        </div>
        <br>
        <div>
            <label for="atrasos">Número de Atrasos:</label>
            <input type="number" id="atrasos" name="atrasos" min="0" value="0" required>
        </div>
        <br>
        <button type="submit">Enviar Dados</button>
    </form>

</body>
</html>
