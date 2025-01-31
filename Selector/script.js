// Form validation
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;

    if (name === "" || email === "") {
        document.getElementById("message").textContent = "Semua field harus diisi!";
        document.getElementById("message").style.color = "red";
    } else {
        document.getElementById("message").textContent = "Form berhasil dikirim!";
        document.getElementById("message").style.color = "green";
    }
});

// Efek hover dengan jQuery untuk menu
$("nav ul li a").hover(function() {
    $(this).animate({
        fontSize: "1.2rem",
        color: "#ff6347"
    }, 200);
}, function() {
    $(this).animate({
        fontSize: "1rem",
        color: "white"
    }, 200);
});

// Smooth scrolling
$("nav ul li a").click(function(event) {
    event.preventDefault();

    var target = $(this).attr("href");

    $("html, body").animate({
        scrollTop: $(target).offset().top
    }, 800);
});
