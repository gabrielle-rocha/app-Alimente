document.querySelectorAll('.openCampaignModalBtn').forEach((button) => {
  button.addEventListener('click', function() {
      const index = this.getAttribute('data-index');
      const modal = document.getElementById(`campaignModal${index}`);
      modal.style.display = 'block';
  });
});

document.querySelectorAll('.campaign-close-btn').forEach((closeButton) => {
  closeButton.addEventListener('click', function() {
      this.closest('.campaign-modal').style.display = 'none';
  });
});

// Fechar o modal ao clicar fora dele
window.addEventListener('click', function(event) {
  if (event.target.classList.contains('campaign-modal')) {
      event.target.style.display = 'none';
  }
});