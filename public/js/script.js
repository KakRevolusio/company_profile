// butn bantuan
window.addEventListener("scroll", function() {
    var button = document.querySelector(".fixed-bottom-right");
    var footer = document.getElementById("footer");
    var buttonOffset = button.offsetTop + button.offsetHeight;
    var footerOffset = footer.offsetTop;

    if (window.pageYOffset + window.innerHeight >= footerOffset) {
        button.classList.add("hide");
    } else {
        button.classList.remove("hide");
    }
});

