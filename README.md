# pagina-simples-de-cupom-fiscal V1


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <img src="https://raw.githubusercontent.com/GilmarSistema/pagina-simples-de-cupom-fiscal/main/v1/v1.png" alt="Imagem" width="500">
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo PIX</title>
    <style>
        .pix-container {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: Arial, sans-serif;
        }

        .pix-code {
            flex: 1;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .copy-button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="pix-container">
        <div class="pix-code">
            Seu código PIX: 1234
        </div>
        <div class="copy-button" onclick="copyToClipboard()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h6V3a1 1 0 011-1h4a1 1 0 011 1v1h6a2 2 0 012 2v12a2 2 0 01-2 2zm-2-2v-7H7v7h10zm-2-9H7v2h8v-2z"/></svg>
        </div>
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
