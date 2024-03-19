<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de primitivos</h1>

    <?php
    // 0x = hexadecimal 0b = binário 0 = octal
    $num = 010;
    echo "O valor de num é $num <br>"; // 8

    $v = 300;
    var_dump($v);
    echo "<br>";

    $num = (int) 3e2;
    var_dump($num);
    echo "<br>";

    $casado = false;
    var_dump($casado);
    echo "O valor para casado é $casado <br>"; // false é vazio então não imprime nada, se for true imprime 1

    $vet = [1, 2, 3, 4, 5];
    var_dump($vet);
    echo "<br>";

    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa();
    var_dump($p);
    ?>


</body>

</html>