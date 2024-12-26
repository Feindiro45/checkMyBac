$(document).ready(function () {
  $("#search").click(function (e) {
    e.preventDefault();

    // Récupérer les valeurs des champs
    let année = $(".année").val();
    let matricule = $(".matricule").val();

    // Réinitialiser les messages d'erreur
    $(".m1").html("");
    $(".m2").html("");

    // Vérifications des champs et messages d'erreur
    let isValid = true;

    if (!matricule) {
      $(".m1").html("Le champ matricule est vide");
      isValid = false;
    }

    if (année === "Choississez l'année de votre bac") {
      $(".m2").html("Veuillez choisir l'année d'obtention de votre bac");
      isValid = false;
    }

    // Si les champs sont valides, afficher le modal de chargement
    if (isValid) {
      $("body").addClass("blurred"); // Ajouter un effet de flou au contenu
      $("#loadingModal").show(); // Afficher le modal de chargement

      let progress = 10;
      $("#progressText").text(progress + "%");

      // Simuler une progression de chargement
      let interval = setInterval(function () {
        if (progress >= 100) {
          clearInterval(interval);

          // Requête AJAX pour obtenir le résultat
          $.ajax({
            method: "GET",
            data: { an: année, matricule: matricule },
            success: function (response) {
              $("#loadingModal").hide(); // Masquer le modal une fois le résultat prêt
              $("body").removeClass("blurred"); // Supprimer l'effet de flou
              $("#result").html(response); // Afficher le résultat
            },
            error: function () {
              $("#loadingModal").hide(); // Masquer le modal en cas d'erreur
              $("body").removeClass("blurred"); // Supprimer l'effet de flou
              alert("Erreur lors de la requête. Veuillez réessayer.");
            },
          });
        } else {
          progress += 10; // Augmenter la progression de 10%
          $("#progressText").text(progress + "%");
        }
      }, 500); // 500 ms entre chaque étape pour simuler un chargement
    }
  });
});
