<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Desafio Antecessor/Sucessor PHP</title>
</head>

<body>
    <main>
        <h1> Resultado final</h1>
        <p>
            <?php
            $numero = $_REQUEST["numero"] ?: 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número escolhido foi <strong>$numero.</strong>";
            echo "<br>Seu <em>antecessor</em> é $antecessor.";
            echo "<br>Seu <em>sucessor</em> é $sucessor.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05Voltar</button>
    </main>
</body>

</html>