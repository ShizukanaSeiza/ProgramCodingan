$(document).ready(function () {
    function createBalloon() {
        let balloon = $("<div class='balloon'></d$(iv>");
        let posX = Math.random() * ($(window).width() - 50);
        let posY = Math.random() * ($(window).height() - 50);

        balloon.css({ left: posX + "px", top: posY + "px" });

        $("body").append(balloon);

        setTimeout(function () {
            balloon.fadeOut(500, function () {
                $(this).remove();
            });
        }, 2000);

        balloon.click(function () {
            $(this).fadeOut(300, function () {
                $(this).remove();
            });
        });
    }

    setInterval(createBalloon, 1000);
});
