$(document).ready(function () {
    $(".session_input").click(function (e) {
        e.preventDefault();
        var session = $(".year").val().trim();

        if (!session) {
            session_error = "Le champ ne doit pas être vide!";
            $(".session_error").html("");
            $(".session_error").html(session_error);
        } else {
            session_error = "";
            $(".session_error").html("");
        }
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "/admin/insert-session",
            data: {
                session: session,
            },
            success: function (response) {
                swal(response.status);
                window.location.reload();
            },
        });
    });
});
