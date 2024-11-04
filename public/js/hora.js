document.addEventListener("DOMContentLoaded", function() {
    const postTimeElements = document.querySelectorAll(".postTime");

    postTimeElements.forEach(element => {
        const postTime = new Date(element.getAttribute("data-post-time"));

        function updateTime() {
            const now = new Date();
            const diffInSeconds = Math.floor((now - postTime) / 1000);
            
            let displayText;
            
            if (diffInSeconds < 60) {
                displayText = `Há ${diffInSeconds} segundos`;
            } else if (diffInSeconds < 3600) {
                const diffInMinutes = Math.floor(diffInSeconds / 60);
                displayText = `Há ${diffInMinutes} minutos`;
            } else if (diffInSeconds < 86400) {
                const diffInHours = Math.floor(diffInSeconds / 3600);
                displayText = `Há ${diffInHours} horas`;
            } else {
                const diffInDays = Math.floor(diffInSeconds / 86400);
                displayText = `Há ${diffInDays} dias`;
            }

            element.textContent = displayText;
        }

        // Atualiza o tempo imediatamente e depois a cada segundo
        updateTime();
        setInterval(updateTime, 1000);
    });
});