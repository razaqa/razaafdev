$(document).ready(function(){
    var newHeightCover = $(window).height();
    changeNavbarColorOnScroll(newHeightCover);
});

$(document).scroll(function() {
    var newHeightCover = $(window).height();
    changeNavbarColorOnScroll(newHeightCover);
});

$(window).on('resize', function(){
    var newHeightCover = $(window).height();
    changeNavbarColorOnScroll(newHeightCover);
});

function changeNavbarColorOnScroll(newHeightCover) {
    var marginTop = 40;
    if ($(document).scrollTop() >= newHeightCover - marginTop && $(document).scrollTop() <= 2*newHeightCover - marginTop ||
        $(document).scrollTop() >= 3*newHeightCover - marginTop && $(document).scrollTop() <= 4*newHeightCover - marginTop) {
        $(".nav-font").css("color",  "black");
        $(".main-menu").removeClass("white-underline");
    } else {
        $(".nav-font").css("color", "white");
        $(".main-menu").addClass("white-underline");
    }
}
