@extends("mehr4-theme-danesh::layout")
@section('class-body')
    home page template-slider color-custom style-simple layout-full-width
    nice-scroll-on mobile-tb-hide button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide subheader-both-center
    menu-line-below-80 menuo-right menuo-no-borders footer-sliding footer-copy-center
@endsection
@section('main')

    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper " data-alias="classic4export" data-source="gallery"
         style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        {{--        {!!setting_edit('slider1')!!} {!!setting_edit('slider2')!!} {!!setting_edit('slider3')!!} {!!setting_edit('slider4')!!}--}}
        <div id="rev_slider_1078_1" class="rev_slider " style="display:none;" data-version="5.4.1">

            <ul>    <!-- SLIDE  -->
                <li data-index="rs-3045" data-transition="random-premium" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->

                    <img src="{{setting('slider1')}}" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-3046" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                    data-title="Parallax" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{setting('slider2')}}" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-3047" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                    data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->

                    <img src="{{setting('slider3')}}" alt="" data-bgposition="center center" data-kenburns="on"
                         data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                         data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-3048" data-transition="random-premium" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off"
                    data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->

                    <img src="{{setting('slider4')}}" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->

            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section sec1">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <hr class="no_line" style="margin:0 auto 27px">
                                        <div class="column_attr clearfix align_center">
                                            <h2> {{setting('site.name')}}</h2>
                                            {!!setting_edit('site.name')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center"
                                             style="background-color:#fff; padding:0 26px;height: 273px;">
                                            <div
                                                style="width: 100%; height: 5px; background:#dce2e9; border-radius: 0 0 2px 2px"></div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <div
                                                class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid thumbnail"
                                                         src="/vendor/mehr4-theme-danesh/images/theme/icon1.png"
                                                         alt="{{setting('site.name')}}"
                                                         title="{{setting('site.name')}}"
                                                         width="150px"
                                                    >

                                                </div>
                                            </div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <h4>{{setting('icon1.title')}}</h4>
                                            {!!setting_edit('icon1.title')!!}
                                            <hr style=";color:gray;margin:0 auto 20px">
                                            <h6>{{setting('icon1.text')}}</h6>
                                            {!!setting_edit('icon1.text')!!}
                                            <hr class="no_line" style="margin:0 auto 10px">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center"
                                             style="background-color:#fff;padding:0 26px;height: 273px;">
                                            <div
                                                style="width: 100%; height: 5px; background:#dce2e9;border-radius:0 0 2px 2px"></div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <div
                                                class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid"
                                                         src="/vendor/mehr4-theme-danesh/images/theme/icon2.png"
                                                         alt="{{setting('site.name')}}"
                                                         title="{{setting('site.name')}}" width="150px">
                                                </div>
                                            </div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <h4>
                                                <a href="">{{setting('icon2.title')}}</a>
                                                {!!setting_edit('icon2.title')!!}
                                            </h4>
                                            <hr style=";color:gray;margin:0 auto 20px">
                                            <h6>{{setting('icon2.text')}}</h6>
                                            {!!setting_edit('icon2.text')!!}
                                            <hr class="no_line" style="margin:0 auto 10px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center"
                                             style="background-color:#fff;padding:0 26px;height: 273px;">
                                            <div
                                                style="width: 100%; height: 5px; background:#dce2e9;border-radius:0 0 2px 2px"></div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <div
                                                class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid"
                                                         src="/vendor/mehr4-theme-danesh/images/theme/icon3.png"
                                                         alt="{{setting('site.name')}}"
                                                         title="{{setting('site.name')}}" width="150px">
                                                </div>
                                            </div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <h4><a href="">{{setting('icon3.title')}}</a></h4>
                                            {!!setting_edit('icon3.title')!!}
                                            <hr style=";color:gray;margin:0 auto 20px">
                                            <h6>{{setting('icon3.text')}}</h6>
                                            {!!setting_edit('icon3.text')!!}
                                            <hr class="no_line" style="margin:0 auto 10px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center"
                                             style="background-color:#fff;padding:0 26px;height: 273px;">
                                            <div
                                                style="width: 100%; height: 5px; background:#dce2e9;border-radius:0 0 2px 2px"></div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <div
                                                class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid"
                                                         src="/vendor/mehr4-theme-danesh/images/theme/icon4.png"
                                                         alt="{{setting('site.name')}}"
                                                         title="{{setting('site.name')}}" width="150px">
                                                </div>
                                            </div>
                                            <hr class="no_line" style="margin:0 auto 20px">
                                            <h4><a href="">{{setting('icon4.title')}}</a></h4>
                                            {!!setting_edit('icon4.title')!!}
                                            <hr style=";color:gray;margin:0 auto 20px">
                                            <h6>{{setting('icon4.text')}}</h6>
                                            {!!setting_edit('icon4.text')!!}
                                            <hr class="no_line" style="margin:0 auto 10px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="section mcb-section  course-home" id="gallery"
                         data-id="#gallery" style="padding-bottom: 0;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-bz33anreb one  valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-mppu1ezi0 one column_column head-packege">
                                        <div class="column_attr clearfix align_center " style="">
                                            <h2 class="section-coursefeature">دوره های آموزشی پرمخاطب</h2>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class=""></div>
                                    <div class="column one column_portfolio">
                                        <div class="portfolio_wrapper isotope_wrapper">
                                            <ul class="portfolio_group lm_wrapper isotope grid col-3"
                                                style="position: relative; height: 1079.77px;">
                                                @foreach(\Dpsoft\Mehr\Models\Course::all() as $featuredCourse)
                                                    <li class="portfolio-item isotope-item category-artwork category-banner  has-thumbnail"
                                                        style="position: absolute; left: 0px; top: 0px;">
                                                        <a href="{{$featuredCourse->url}}">
                                                            <div class="portfolio-item-fw-bg" style="">
                                                                <div class="portfolio-item-fill"></div>
                                                                <div class="list_style_header"><h3 class="entry-title"
                                                                                                   itemprop="headline">
                                                                        <a
                                                                            class="link"
                                                                            href="{{$featuredCourse->url}}">
                                                                            {{$featuredCourse->title}}
                                                                        </a></h3>
                                                                    <div class="links_wrapper"><a href="#"
                                                                                                  class="button the-icon portfolio_prev_js"><span
                                                                                class="button_icon"><i
                                                                                    class="icon-up-open"></i></span></a><a
                                                                            href="#"
                                                                            class="button the-icon portfolio_next_js"><span
                                                                                class="button_icon"><i
                                                                                    class="icon-down-open"></i></span></a><a
                                                                            href="https://themes.muffingroup.com/betheme/portfolio-item/standard-portfolio/"
                                                                            class="button button_theme has-icon"><span
                                                                                class="button_icon"><i
                                                                                    class="icon-link"></i></span><span
                                                                                class="button_label">اطلاعات بیشتر و ثبتنام</span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="image_frame scale-with-grid">
                                                                    <div class="image_wrapper"><a
                                                                            href="{{$featuredCourse->url}}">
                                                                            <div class="mask"></div>
                                                                            <img width="960" height="720"
                                                                                 {{--                                                                                 src="https://themes.muffingroup.com/betheme/wp-content/uploads/2020/10/betheme-portfolio-pic1-960x720.jpg"--}}
                                                                                 class="scale-with-grid wp-post-image"
                                                                                 alt=""
                                                                                 loading="lazy"
                                                                                 srcset=" {{$featuredCourse->avatar? Storage::url($featuredCourse->avatar):'https://themes.muffingroup.com/betheme/wp-content/uploads/2020/10/betheme-portfolio-pic1-960x720.jpg'}}"
                                                                                 sizes="(max-width: 960px) 100vw, 960px"></a>

                                                                    </div>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="title_wrapper"><h5 class="entry-title"
                                                                                                   itemprop="headline">
                                                                            <a
                                                                                class="link"
                                                                                href="{{$featuredCourse->url}}"
                                                                                style="color: black!important;">{{$featuredCourse->title}}</a>
                                                                        </h5>
                                                                        <hr>

                                                                        <a
                                                                            class="button"
                                                                            href="{{$featuredCourse->url}}"
                                                                            style="color: white!important;margin: 0 25%;">جزئیات
                                                                            و ثبت نام</a>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section mcb-section" id="moshavere">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap three-fifth valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_image">
                        <div
                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid"
                                     src="{{setting('site.moshavere1')}}"
                                     alt="{{setting('site.name')}}"
                                     title="{{setting('site.name')}}">
                                {!!setting_edit('site.moshavere1')!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap two-fifth valign-top clearfix" style="padding:40px 0 0 5%">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                            <h3>{{setting('home-mosh')}}</h3>
                            {!!setting_edit('home-mosh')!!}
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <div class="form-group group">
                                    <div class="column two-third ">
                                        <input class=" request" type="" name="email_newsletter"
                                               id="email_newsletter"
                                               placeholder="شماره تماس شما">
                                        <a class="button button_size_2 button_js" href="#"
                                           style="padding: 0 90px;margin: .111rem;"><span
                                                class="button_label">درخواست</span></a>
                                    </div>
                                    <div class="column one-third">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                        <div class="column mcb-column one column_hover_box ">--}}
                    {{--                            <div class="hover_box">--}}
                    {{--                                <a href="{{route('contact')}}">--}}
                    {{--                                    <div class="">--}}
                    {{--                                        <img class="visible_photo scale-with-grid"--}}
                    {{--                                             src="{{setting('site.moshavere2')}}"--}}
                    {{--                                             alt="{{setting('site.name')}}"--}}
                    {{--                                             title="{{setting('site.name')}}">--}}
                    {{--                                        {!!setting_edit('site.moshavere2')!!}--}}
                    {{--                                    </div>--}}
                    {{--                                </a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
@endsection


