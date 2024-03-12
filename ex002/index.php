<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    // Configura o fuso horário para o horário de Campo Grande
    date_default_timezone_set(
        "America/Campo_Grande"
    );

    // Exibe a data e a hora atual
    echo "Hoje é dia " . date("d/M/y") . " e a hora atual é " . date("G:i:s T")
    ?>
</body>

</html>