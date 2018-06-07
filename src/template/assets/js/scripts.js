$(document).ready(function () {
    $('.menu a').click(function () {
        var page = $(this).attr('href');
        $('#result').hide(0, request);

        function request() {
            $.ajax({
                url: "includes.php?page=" + page,
                type: "GET",
                success: function (html) {
                    $('#result').html(html).show();
                },
                error: function () {
                    console.log('Failed to load content from ' + page);
                }
            });
        }

        return false;
    });
});