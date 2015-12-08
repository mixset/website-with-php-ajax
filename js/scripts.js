$(document).ready(function () {
    $('#menu a').click(function () {
        var changing_page = $(this).attr('href');
        $('#content').hide(0, request);

        function request() {
            $.ajax(
                {
                    url: "includes.php?page=" + changing_page,
                    type: "GET",
                    success: function (html) {
                        $('#content').html(html).show();
                    }
                });
        }

        return false;
    });
});

