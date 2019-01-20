var newHeightCover = $(window).height();
$(".img-cover-height").height(newHeightCover);
$(window).on('resize', function(){
    var newHeightCover = $(window).height();
    $(".img-cover-height").height(newHeightCover);
});
