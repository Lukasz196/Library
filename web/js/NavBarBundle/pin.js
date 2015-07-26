$(document).ready(function () {
    $(document).on('click', '#navBarPin', function () {
        $.ajax({
            url: $(this).attr('href')
        }).done(function (data) {
            if (data.trim() == 'true') {
                $('#navBar').attr('class', 'custom_navbar navbar navbar-inverse');
            }
            else {
                $('#navBar').attr('class', 'custom_navbar_top custom_navbar navbar navbar-inverse');
            }
        })
        return false;
    });
});