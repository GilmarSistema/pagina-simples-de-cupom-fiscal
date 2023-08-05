<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupom Fiscal Emitido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cupom Fiscal Emitido</h1>
        <p>Cliente: <?php echo $_POST['nome']; ?></p>
        <p>Produto: <?php echo $_POST['produto']; ?></p>
        <p>Valor: R$ <?php echo $_POST['valor']; ?></p>
    </div>
</body>
</html>
