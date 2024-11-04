function showPixModal(postagemId) {
    // Gerar uma chave Pix aleatória (exemplo simples)
    const pixKey = generateRandomPixKey();
    
    // Definir a chave Pix e a URL do QR Code
    document.getElementById('pixKey').innerText = pixKey;
    document.getElementById('qrcode').src = `https://api.qrserver.com/v1/create-qr-code/?data=${pixKey}&size=200x200`;

    // Mostrar o modal
    document.getElementById('pixModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('pixModal').style.display = 'none';
}

function generateRandomPixKey() {
    // Gera uma chave Pix aleatória (exemplo)
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result = '';
    for (let i = 0; i < 32; i++) {
        result += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return result;
}

// Fechar o modal quando o usuário clica fora do modal

window.onclick = function(event) {
    const modal = document.getElementById('pixModal');
    if (event.target === modal) {
        closeModal();
    }

}
