# pagina-simples-de-cupom-fiscal V1

#  PIX

<div style="display: flex; flex-direction: column; align-items: center; font-family: Arial, sans-serif;">
    <div class="image-container">
        <img src="https://raw.githubusercontent.com/GilmarSistema/pagina-simples-de-cupom-fiscal/main/v1/v1.png" alt="Imagem" width="300">
    </div>
    <div class="pix-code">
        Seu código PIX: 1234
        <span class="copy-button" onclick="copyToClipboard()">Copiar</span>
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


