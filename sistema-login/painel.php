<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
</head>

<body>
  <p>Bem vindo ao painel, <?php echo $_SESSION['nome']; ?></p>
  <p>
    <a href="logout.php">Sair</a>
  </p>
</body>

</html>