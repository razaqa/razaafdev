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
    if ($(document).scrollTop() >= newHeightCover - marginTop && $(document).scrollTop() <= 2*newHeightCover - marginTop) {
        $(".nav-font").css("color",  "black");
    } else {
        $(".nav-font").css("color", "white");
    }
}
