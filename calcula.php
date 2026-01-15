<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $tarefas = $_POST["tarefas"];
        $atrasos = $_POST["atrasos"];

        if ($tarefas >= 20 && $atrasos <= 1) {
            $resultado = "Excelente";
        } elseif ($tarefas >= 10 && $tarefas <= 19 && $atrasos <= 3) {
            $resultado = "Regular";
        } else {
            $resultado = "Insatisfatório";
        }
    }


?>

<table border=1>
    <tr>
        <th>Nome:</th>
        <th>Idade:</th>
        <th>Número de Tarefas:</th>
        <th>Número de Atrasos:</th>
        <th>Desempenho:</th>
    </tr>

    <tr>
        <td> <?= $nome ?> </td>
        <td> <?= $idade ?> </td>
        <td> <?= $tarefas ?> </td>
        <td> <?= $atrasos ?> </td>
        <td> <?= $resultado ?> </td>
    </tr>
</table>