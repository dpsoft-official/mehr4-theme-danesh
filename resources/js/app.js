require('./bootstrap');
import 'owl.carousel';
import 'vue-owl-carousel';
import carousel from 'vue-owl-carousel'

export default {
    components: {carousel},
}

function myFunction() {
    alert("برای مشاهده این ویدیو باید دوره را خریداری نمایید!");
}

var tpj = jQuery;
var revapi1078;
tpj(document).ready(function () {
    if (tpj("#rev_slider_1078_1").revolution == undefined) {
        // revslider_showDoubleJqueryError("#rev_slider_1078_1");
    } else {
        revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,

                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                }
                ,
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                }
            },
            viewPort: {
                enable: true,
                outof: "pause",
                visible_area: "100%",
                presize: false
            },
            // responsiveLevels:[1240,1024,auto,auto],
            // visibilityLevels:[1240,1024,auto,auto],
            gridwidth: [1920, 1024, 500, 250],
            gridheight: [680, 380, 400, 800],
            lazyType: "none",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
});



$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
});

$( document ).ready(function() {
    if($(window).width() >= 1024){
        var $sticky = $('.sticky');
        var $stickyrStopper = $('.sticky-stopper');
        if (!!$sticky.offset()) { // make sure ".sticky" element exists

            var generalSidebarHeight = $sticky.innerHeight();

            var stickyTop = $sticky.offset().top;
            var stickOffset = 70;
            var stickyStopperPosition = $stickyrStopper.offset().top;
            var stopPoint = stickyStopperPosition - generalSidebarHeight-30;
            var diff = stopPoint + stickOffset;
            $(window).scroll(function(){ // scroll event
                var windowTop = $(window).scrollTop(); // returns number
                console.log(stopPoint < windowTop)
                if (stopPoint < windowTop) {
                    $sticky.css({position: 'absolute', top: 'initial',width:240});
                } else if (stickyTop < windowTop+stickOffset) {
                    $sticky.css({ position: 'fixed', top: stickOffset,width:240 });
                }else {
                    $sticky.css({position: 'absolute', top: 'initial',width:240});
                }
            });

        }    }

});
