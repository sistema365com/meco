var BlankonSliderRevolutionSliderGym = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionSliderGym.handlePreloader();
            BlankonSliderRevolutionSliderGym.handleScrollNav();
            BlankonSliderRevolutionSliderGym.handleAnimateElement();
            BlankonSliderRevolutionSliderGym.handleTestimonials();
            BlankonSliderRevolutionSliderGym.handleBackToTop();
        },

        // =========================================================================
        // SET UP BASE URL
        // =========================================================================
        handleBaseURL: function () {
            var getUrl = window.location,
                baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            return baseUrl;
        },

        // =========================================================================
        // PRELOADER TRIGGER
        // =========================================================================
        handlePreloader: function () {
            setTimeout(function(){
                $('body').addClass('loaded');

                // Call banner with slider
                BlankonSliderRevolutionSliderGym.handleBanner();
            }, 3000);
        },

        // =========================================================================
        // NAVIGATION SCROLL
        // =========================================================================
        handleScrollNav: function () {
            //jQuery to collapse the navbar on scroll
            $(window).scroll(function() {
                if ($(".navbar").offset().top > 50) {
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                } else {
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                }
            });

            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('.page-scroll').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-80
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });

        },

        // =========================================================================
        // ANIMATION ELEMENT
        // =========================================================================
        handleAnimateElement: function () {
            new WOW().init();
        },

        // =========================================================================
        // BANNER SLIDER
        // =========================================================================
        handleBanner: function () {
            var tpj=jQuery;
            var revapi14;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_14_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_14_1");
                }else{
                    revapi14 = tpj("#rev_slider_14_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation: BlankonSliderRevolutionSliderGym.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"on",
                            onHoverStop:"off",
                            touch:{
                                touchenabled:"on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "vertical",
                                drag_block_vertical: false
                            }
                        },
                        responsiveLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[868,768,960,720],
                        lazyType:"none",
                        shadow:0,
                        spinner:"off",
                        stopLoop:"on",
                        stopAfterLoops:0,
                        stopAtSlide:1,
                        shuffle:"off",
                        autoHeight:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
                }
            });	/*ready*/
        },

        // =========================================================================
        // TESTIMONIALS
        // =========================================================================
        handleTestimonials: function () {
            (function($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-testimonials').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: false,
                    showPagination: true,
                    rewindNav: false,
                    scrollByPage: false,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                        width: 1,
                        cols: 1
                    }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'default',
                });
            })(jQuery, window, document);
        },

        // =========================================================================
        // BACK TOP
        // =========================================================================
        handleBackToTop: function () {
            $('#back-top').hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        }

    };

}();

// Call main app init
BlankonSliderRevolutionSliderGym.init();