$(document).ready(function () {
    $("#search").click(function (e) {
        e.preventDefault();

        // Récupérer les valeurs des champs
        let année = $(".année").val().trim();
        let matricule = $(".matricule").val().trim();

        // Réinitialiser les messages d'erreur
        $(".m1").html("");
        $(".m2").html("");

        // Vérifications des champs et messages d'erreur
        let isValid = true;

        if (!matricule) {
            $(".m1").html("Le champ matricule est vide");
            isValid = false;
        }

        if (!année || année === "Choississez l'année de votre bac") {
            $(".m2").html("Veuillez choisir l'année d'obtention de votre bac");
            isValid = false;
        }

        // Si les champs sont valides, afficher le modal de chargement
        if (isValid) {
            $("body").addClass("blurred"); // Ajouter un effet de flou au contenu
            $("#loadingModal").show(); // Afficher le modal de chargement

            // Simuler une progression de chargement
            let progress = 10;
            $("#progressText").text(progress + "%");

            let interval = setInterval(function () {
                if (progress >= 100) {
                    clearInterval(interval); // Arrêter l'intervalle une fois la progression à 100%

                    // Masquer le modal de chargement
                    $("#loadingModal").hide();
                    $("body").removeClass("blurred"); // Enlever l'effet de flou

                    // Afficher le modal de succès avec le message "Bravo"
                    $("#successModal").modal("show"); // Afficher le modal de succès
                } else {
                    progress += 10; // Augmenter la progression de 10%
                    $("#progressText").text(progress + "%");
                }
            }, 250); // 500 ms entre chaque étape pour simuler un chargement
        }
    });
});
