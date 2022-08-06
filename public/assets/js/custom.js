$(document).ready(function () {
    $('.collapse').on('show.bs.collapse', function () {

        
        $('.collapse.show').each(function () {
            $(this).collapse('hide');
        });
    });

    $(".search-toggler").click(function () {
        $('.site-header .active').not(this).removeClass('active');
        $(this).toggleClass("active");
    });
    $(".navbar-toggler").click(function () {
        $('.site-header .active').not(this).removeClass('active');
        $(this).toggleClass("active");
    });

    
});

$(document).ready(function () {
    $("body:not('.sfPageEditor')").addClass("public");

    if ($(".comp1-head").hasClass("row")) {
        $("body").addClass("comp1-body");
    }
    // var scroller1 = $(".main-category-wrapper").kendoMobileScroller();
    //var scroller2 = $(".main-container").nanoScroller();

});


$(window).on('load', function () {
    $("body").show();
    var slider = $("#newsSlider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 3000, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: false,
        pause:3000,

        keyPress: true,
        controls: false,
        prevHtml: 'left',
        nextHtml: 'right',

        rtl: false,
        adaptiveHeight: false,

        vertical: false,
        verticalHeight: 500,
        vThumbWidth: 100,

        thumbItem: 10,
        pager: false,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch: true,
        enableDrag: false,
        freeMove: true,
        swipeThreshold: 40,

        responsive: [],

        onBeforeStart: function (el) { },
        onSliderLoad: function (el) { },
        onBeforeSlide: function (el) { },
        onAfterSlide: function (el) { },
        onBeforeNextSlide: function (el) { },
        onBeforePrevSlide: function (el) { }
    });


    $('.nsPrev').on("click", function () {
        slider.goToPrevSlide();
    });
    $('.nsNext').on("click", function () {
        slider.goToNextSlide();
    });

});






$(window).on('resize load', function () {
    resizeVideo();
    roundColumn();
    resizeContainer();
}).resize();

function resizeVideo() {
    var width = $('.main-video-cover').width();
    $('#mainVideo').height(width * 0.68).width(Math.floor(width));
}

function roundColumn() {
    $('.public .course-tile-wrap').each(function () {
        var width = $(this).width();
        $(this).width(Math.floor(width));
    });

}


function resizeContainer() {
   
    var heightHeader = $('.site-header').height();
    var heightFooter = $('#footer').height();
    var heightBody = $('body').height();
    var heightContainer = heightBody - (heightHeader + heightFooter + 40);

   // var numItems = $('body > div').length;
    var numItems = $('.mainContainer').parent().children('div').length;
    if (numItems === 2) {
        $('.mainContainer').css('min-height', heightContainer);
    }

}
