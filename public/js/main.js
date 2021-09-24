$(document).on("click", '.get-cat', function () {
    $('.get-cat').addClass('disabled');
    $.ajax({
        url: "/api/get-random-cat",
        type: "POST",
        success: function (result) {
            $(".cat-image").html("<img src='" + result[0].url + "' class='rounded mx-auto d-block mw-100'>");
            setTimeout(enableButton, 1500);
        }
    });
});

function enableButton() {
    $('.get-cat').removeClass('disabled');
}