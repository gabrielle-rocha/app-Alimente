// Abrir o modal de campanha
const openCampaignModalBtn = document.getElementById("openCampaignModalBtn");
const campaignModal = document.getElementById("campaignModal");
const campaignCloseBtn = document.querySelector(".campaign-close-btn");

openCampaignModalBtn.addEventListener("click", () => {
  campaignModal.style.display = "block";
});

// Fechar o modal ao clicar no "x"
campaignCloseBtn.addEventListener("click", () => {
  campaignModal.style.display = "none";
});

// Fechar o modal ao clicar fora dele
window.addEventListener("click", (event) => {
  if (event.target == campaignModal) {
    campaignModal.style.display = "none";
  }
});
