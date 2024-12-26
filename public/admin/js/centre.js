$(document).ready(function () {
    $(".centre_add").click(function (e) {
        e.preventDefault();

        var num_centre = $(".num_centre").val().trim();
        var nom_centre = $(".nom_centre").val().trim();
        var ville_centre = $(".ville_centre").val().trim();

        $(".num_error").html("");
        $(".nom_error").html("");
        $(".ville_error").html("");

        let isValid = true;

        if (!num_centre) {
            $(".num_error").html("le numéro du centre est obligatoire");
            isValid = false;
        }

        if (!nom_centre) {
            $(".nom_error").html("le nom du centre est obligatoire");
            isValid = false;
        }

        if (!ville_centre || ville_centre === "Choississez une ville") {
            $(".ville_error").html("la ville du centre est obligatoire");
            isValid = false;
        }

        if (isValid) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });

            $.ajax({
                method: "POST",
                url: "add-centre-examen",
                data: {
                    num_centre: num_centre,
                    nom_centre: nom_centre,
                    ville_centre: ville_centre,
                },
                success: function (response) {
                    swal(response.status);
                    window.location.reload();
                },
            });
        } else {
            swal("échec d'ajout!");
        }
    });
});
