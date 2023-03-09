$(document).ready(function () {
    var owl = $(".owl-carousel");
    var itemsCount = 4;
    const width = $(window).width();
    if (width >= 1400) {
        itemsCount = 5;
    } else if (width >= 1200) {
        itemsCount = 4;
    } else if (width >= 900) {
        itemsCount = 3;
    } else if (width >= 600) {
        itemsCount = 2;
    } else {
        itemsCount = 1;
    }
    owl.owlCarousel({
        items: itemsCount,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
    });
    $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [1000]);
    });
    $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
    });
});

// Justified Gallery
$("#mygallery").justifiedGallery({
    rowHeight: 200,
    justifyThreshold: 0.4,
    margins: 5,
    border: 0,
    target: "_blank",
    randomize: true,
    waitThumbnailsLoad: true,
});
