//Effetto animazione caricamento contenuti a comparsa
document.addEventListener("DOMContentLoaded", function() {
    var contenutiDaMostrare = document.querySelectorAll(".comparsa");

    contenutiDaMostrare.forEach(function(contenuto) {
      // Mostra ciascun contenuto con l'effetto a comparsa
    contenuto.style.display = "block";
    setTimeout(function() {
        contenuto.style.opacity = "1";
        contenuto.style.transform = "translateY(0)";
    }, 350);
    });
});