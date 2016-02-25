$(document).ready(function () {

    var inProgress = false;
    var startFrom = 5;
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {
            $.ajax({
                url: 'obrabotchik.php',
                method: 'POST',
                data: {"startFrom": startFrom},
                beforeSend: function () {
                    inProgress = true;
                }
            }).done(function (data) {
                console.log(data);
                data = jQuery.parseJSON(data);
                if (data.length > 0) {
                    $.each(data, function (index, data) {
                        $("#content").append("<p><a href = 'single_article.php?id=" + data.id + "'>" + data.title + "</a><br/><br/>"
                                + data.text + "<br/><br/></p>");
                    });
                    inProgress = false;
                    startFrom += 5;
                }
            });
        }
    });
});