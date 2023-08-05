# pagina-simples-de-cupom-fiscal V1

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Imagem e PIX</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .image-container {
            margin-bottom: 20px;
        }

        .pix-code {
            font-size: 18px;
        }

        .copy-button {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="https://raw.githubusercontent.com/GilmarSistema/pagina-simples-de-cupom-fiscal/main/v1/v1.png" alt="Imagem" width="300">
    </div>
    <div class="pix-code">
        Seu código PIX: 1234
        <span class="copy-button" onclick="copyToClipboard()">Copiar</span>
    </div>

    <script>
        function copyToClipboard() {
            const pixCode = '1234';
            const textArea = document.createElement('textarea');
            textArea.value = pixCode;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('Código copiado para a área de transferência!');
        }
    </script>
</body>
</html>

