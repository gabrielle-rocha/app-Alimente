document.addEventListener("DOMContentLoaded", function() {
    const imgField = document.getElementById("img-field");
    const imgPreview = document.getElementById("img-preview");
    const icon = document.querySelector(".bi-person-fill-add"); 

    if (imgField) {
        imgField.addEventListener("change", function(event) {
            loadImage(event);
        });
    }

    function loadImage(event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                icon.style.display = "none"; // Oculta o ícone
            };
            
            reader.readAsDataURL(file);
        }
    }
});
