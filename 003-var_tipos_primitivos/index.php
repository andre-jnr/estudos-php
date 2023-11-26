<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tpos primitivos</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
  // 0x = hexadecimal 0b = binário 0 = Octal
  // $numero = 0x1A;
  // echo "O valor da variável é $numero";

  $variavel = (int) 3e2; // declarando no tipo int - coerção
  var_dump($variavel); // mostrar tipo
  // imprimir valores booleanos na tela. true: 1; false: nada ksk

  $array = [1, 2, 3, 4, 5];

  class Pessoa
  {
    private string $nome;
  }

  $obj = new Pessoa;
  ?>
</body>

</html>