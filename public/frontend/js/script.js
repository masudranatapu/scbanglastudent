/*=========================================

Author: Mosharraf Hossain
Version: 1.0
Designed by: Mosharraf Hossain

=========================================*/

$(function () {
    "use strict";

    function carousel() {
        $(".carousel").not(".slick-initialized").each(function () {
            var $this = $(this);

            var slidesPerViewXs = $this.data("xs-items");
            var slidesPerViewSm = $this.data("sm-items");
            var slidesPerViewMd = $this.data("md-items");
            var slidesPerViewLg = $this.data("lg-items");
            var slidesPerViewXl = $this.data("xl-items");
            var slidesPerView = $this.data("items");

            var slidesCenterMode = $this.data("center");
            var slidesArrows = $this.data("arrows");
            var slidesDots = $this.data("dots");
            var slidesRows = $this.data("rows");
            var slidesAutoplay = $this.data("autoplay");
            var slidesFade = $this.data("fade");
            var asNavFor = $this.data("nav-for");
            var infinite = $this.data("infinite");
            var focusOnSelect = $this.data("focus-select");
            var adaptiveHeight = $this.data("auto-height");


            var vertical = $this.data("vertical");
            var verticalXs = $this.data("vertical-xs");
            var verticalSm = $this.data("vertical-sm");
            var verticalMd = $this.data("vertical-md");
            var verticalLg = $this.data("vertical-lg");
            var verticalXl = $this.data("vertical-xl");

            var variableWidth = $this.data("variable-width");
            var draggable = $this.data("draggable");

            slidesPerView = !slidesPerView ? 1 : slidesPerView;
            slidesPerViewXl = !slidesPerViewXl ? slidesPerView : slidesPerViewXl;
            slidesPerViewLg = !slidesPerViewLg ? slidesPerViewXl : slidesPerViewLg;
            slidesPerViewMd = !slidesPerViewMd ? slidesPerViewLg : slidesPerViewMd;
            slidesPerViewSm = !slidesPerViewSm ? slidesPerViewMd : slidesPerViewSm;
            slidesPerViewXs = !slidesPerViewXs ? slidesPerViewSm : slidesPerViewXs;
            vertical = !vertical ? false : vertical;
            verticalXl = (typeof verticalXl == 'undefined') ? vertical : verticalXl;
            verticalLg = (typeof verticalLg == 'undefined') ? verticalXl : verticalLg;
            verticalMd = (typeof verticalMd == 'undefined') ? verticalLg : verticalMd;
            verticalSm = (typeof verticalSm == 'undefined') ? verticalMd : verticalSm;
            verticalXs = (typeof verticalXs == 'undefined') ? verticalSm : verticalXs;


            slidesCenterMode = !slidesCenterMode ? false : slidesCenterMode;
            slidesArrows = !slidesArrows ? false : slidesArrows;
            slidesDots = !slidesDots ? false : slidesDots;
            slidesRows = !slidesRows ? 1 : slidesRows;
            slidesAutoplay = !slidesAutoplay ? false : slidesAutoplay;
            slidesFade = !slidesFade ? false : slidesFade;
            asNavFor = !asNavFor ? null : asNavFor;
            infinite = !infinite ? false : infinite;
            focusOnSelect = !focusOnSelect ? false : focusOnSelect;
            adaptiveHeight = !adaptiveHeight ? false : adaptiveHeight;


            var slidesRtl = ($("html").attr("dir") === "rtl" && !vertical) ? true : false;
            var slidesRtlXL = ($("html").attr("dir") === "rtl" && !verticalXl) ? true : false;
            var slidesRtlLg = ($("html").attr("dir") === "rtl" && !verticalLg) ? true : false;
            var slidesRtlMd = ($("html").attr("dir") === "rtl" && !verticalMd) ? true : false;
            var slidesRtlSm = ($("html").attr("dir") === "rtl" && !verticalSm) ? true : false;
            var slidesRtlXs = ($("html").attr("dir") === "rtl" && !verticalXs) ? true : false;

            $this.slick({
                slidesToShow: slidesPerView,
                autoplay: slidesAutoplay,
                dots: slidesDots,
                arrows: slidesArrows,
                infinite: infinite,
                vertical: vertical,
                rtl: slidesRtl,
                rows: slidesRows,
                centerPadding: "0px",
                centerMode: slidesCenterMode,
                fade: slidesFade,
                variableWidth: variableWidth,
                asNavFor: asNavFor,
                draggable: draggable,
                focusOnSelect: focusOnSelect,
                adaptiveHeight: adaptiveHeight,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><i class="las la-angle-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="las la-angle-right"></i></button>',
                responsive: [{
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: slidesPerViewXl,
                            vertical: verticalXl,
                            rtl: slidesRtlXL,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: slidesPerViewLg,
                            vertical: verticalLg,
                            rtl: slidesRtlLg,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: slidesPerViewMd,
                            vertical: verticalMd,
                            rtl: slidesRtlMd,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: slidesPerViewSm,
                            vertical: verticalSm,
                            rtl: slidesRtlSm,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: slidesPerViewXs,
                            vertical: verticalXs,
                            rtl: slidesRtlXs,
                        },
                    },
                ],
            });
        });
    }

    function onClicks() {
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 20) {
                $(".scrollTop").fadeIn("100");
            } else {
                $(".scrollTop").fadeOut("100");
            }
        });

        $(".scrollTop").click(function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        $('.select').selectpicker({
            width: 'w-100',
            title: "স্থান নির্বাচন করুন",
            style: "bg-white text-muted fs-16",
            liveSearch: true,
            liveSearchPlaceholder: "স্থান নির্বাচন করুন",
        });

        $('.select2').selectpicker({
            width: 'w-100',
            title: "কেটাগরি নির্বাচন করুন",
            style: "bg-white text-muted fs-16",
            liveSearch: true,
            liveSearchPlaceholder: "কেটাগরি নির্বাচন করুন",
        });

        $('.select3').selectpicker({
            width: 'w-100',
            style: "bg-white text-muted fs-16",
            liveSearch: true,
            liveSearchPlaceholder: "এখানে লিখুন",
        });
        
        if ($('#metismenu') > 0) {
            new MetisMenu("#metismenu", {});
        }

        if ($('#metismenu2') > 0) {
            new MetisMenu("#metismenu2", {});
        }
    }

    function popupInit() {
        // Magnific Popup Initialize
        $('.video-trigger').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-with-fade',
            removalDelay: 1000,
            midClick: true,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" src="//about:blank" frameborder="0" allow="autoplay" allowfullscreen></iframe>' + '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: 'https:%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src',
            }
        });

        $('.gallery').each(function () {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    }

    function countdown() {
        if ($("[data-countdown]").length > 0) {
            $("[data-countdown]").each(function () {

                $('[data-countdown]').each(function () {
                    var $this = $(this),
                        finalDate = $(this).data('countdown');
                    $this.countdown(finalDate, function (event) {
                        $this.html(event.strftime(
                            "" +
                            '<span class="countdown-digit">%-D</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span>' +
                            '<span class="countdown-digit">%H</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span>' +
                            '<span class="countdown-digit">%M</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span>' +
                            '<span class="countdown-digit">%S</span>'
                        ));
                    });
                });

            });
        }
    }

    carousel();
    onClicks();
    popupInit();
    countdown();
});
