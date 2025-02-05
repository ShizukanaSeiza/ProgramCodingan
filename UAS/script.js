$(document).ready(function() {
    // Efek animasi saat menggulir halaman
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('bg-dark');
        } else {
            $('.navbar').removeClass('bg-dark');
        }
    });

    // Efek hover pada gambar di halaman portfolio
    $(".portfolio-img").hover(function() {
        $(this).css("transform", "scale(1.1)");
    }, function() {
        $(this).css("transform", "scale(1)");
    });
});