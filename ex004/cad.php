<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        Resultado do processamento
    </header>
    <main>
        <?php
        // var_dump($_POST); superglobal que contém os dados enviados pelo formulário em um array
        // var_dump($_REQUEST); junção de $_GET, $_POST e $_COOKIE

        $nome = $_POST['nome'] ?: 'Visitante';
        $sobrenome = $_POST['sobrenome'] ?: 'Desconhecido';

        echo "É um prazer te conhecer, $nome $sobrenome, esse é meu site!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>