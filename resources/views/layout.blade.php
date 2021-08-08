<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('mehr::component.seo')
    @if(!empty(setting('google.analytics')))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{setting('google.analytics')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', "{{setting('google.analytics')}}");
        </script>
    @endif
    <link rel="shortcut icon" href="{{Storage::url('theme/fav.png')}}" type="image/x-icon">
    @yield('head')
    <link href="{{mix('app.css','vendor/mehr4-theme-danesh')}}" rel="stylesheet">
    @yield('head')
    {!! setting('raw_header') !!}
</head>
<body style="" class="@yield('class-body')">
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">
            @include('mehr4-theme-danesh::component.header')
            <main>@yield('main')</main>
            <!-- /main -->
        </header>
    </div>
</div>
@yield('script')
@include("mehr4-theme-danesh::component.footer")
<!--/footer-->
<!-- COMMON SCRIPTS -->
@yield('footer')
<script src="{{asset('/vendor/mehr4-theme-danesh/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/mfn.menu.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/jquery.plugins.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/jquery.jplayer.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/animations.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/translate3d.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/scripts.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/sweetalert.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-danesh/js/jquery.themepunch.tools.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script
    src="{{asset('/vendor/mehr4-theme-danesh/js/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript">
    var tpj = jQuery;

    var revapi1078;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_1078_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1078_1");
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
                        {{--tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'--}}
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
                    type: "mouse",
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
    });	/*ready*/
</script>
<script src="{{mix('app.js','vendor/mehr4-theme-danesh')}}"></script>

@include('sweet::alert')
{!! setting('raw_footer') !!}
@includeWhen(Auth::check() && Auth::user()->can(\Dpsoft\Mehr\Models\Permission::SETTING_UPDATE),'mehr::component.setting_modal')
</body>
</html>
