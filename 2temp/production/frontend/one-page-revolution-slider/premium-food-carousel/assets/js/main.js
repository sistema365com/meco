var BlankonSliderRevolutionPremiumContentZoom = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionPremiumContentZoom.handlePreloader();
            BlankonSliderRevolutionPremiumContentZoom.handleScrollNav();
            BlankonSliderRevolutionPremiumContentZoom.handleAnimateElement();
            BlankonSliderRevolutionPremiumContentZoom.handleTestimonials();
            BlankonSliderRevolutionPremiumContentZoom.handleBackToTop();
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
                BlankonSliderRevolutionPremiumContentZoom.handleBanner();
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
            var revapi108;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_108_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_108_1");
                }else{
                    revapi108 = tpj("#rev_slider_108_1").show().revolution({
                        sliderType:"carousel",
                        jsFileLocation: BlankonSliderRevolutionPremiumContentZoom.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"off",
                            arrows: {
                                style:"metis",
                                enable:true,
                                hide_onmobile:true,
                                hide_under:768,
                                hide_onleave:false,
                                tmp:'',
                                left: {
                                    h_align:"left",
                                    v_align:"center",
                                    h_offset:0,
                                    v_offset:0
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"center",
                                    h_offset:0,
                                    v_offset:0
                                }
                            }
                            ,
                            thumbnails: {
                                style:"erinyen",
                                enable:true,
                                width:150,
                                height:100,
                                min_width:150,
                                wrapper_padding:20,
                                wrapper_color:"#000000",
                                wrapper_opacity:"0.05",
                                tmp:'<span class="tp-thumb-over"></span><span class="tp-thumb-image"></span><span class="tp-thumb-title">{{title}}</span><span class="tp-thumb-more"></span>',
                                visibleAmount:9,
                                hide_onmobile:false,
                                hide_onleave:false,
                                direction:"horizontal",
                                span:true,
                                position:"outer-bottom",
                                space:10,
                                h_align:"center",
                                v_align:"bottom",
                                h_offset:0,
                                v_offset:0
                            }
                        },
                        carousel: {
                            maxRotation: 65,
                            vary_rotation: "on",
                            minScale: 55,
                            vary_scale: "off",
                            horizontal_align: "center",
                            vertical_align: "center",
                            fadeout: "on",
                            vary_fade: "on",
                            maxVisibleItems: 5,
                            infinity: "on",
                            space: -150,
                            stretch: "off"
                        },
                        gridwidth:600,
                        gridheight:600,
                        lazyType:"none",
                        shadow:0,
                        spinner:"off",
                        stopLoop:"on",
                        stopAfterLoops:0,
                        stopAtSlide:1,
                        shuffle:"off",
                        autoHeight:"off",
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
BlankonSliderRevolutionPremiumContentZoom.init();