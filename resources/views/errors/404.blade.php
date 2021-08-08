@extends("mehr4-theme-taghchemajazi::layout")
@section('class-body')
    color-custom style-simple layout-full-width mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center nice-scroll
@endsection

@section('main')

{{--    <div id="Subheader">--}}
{{--        <div class="container">--}}
{{--            <div class="column one">--}}
{{--                <h1 class="title textalignright">--}}


{{--                    ورود به {{setting('site.name')}}--}}


{{--                </h1>--}}
{{--                <!--BreadCrumbs area-->--}}
{{--                <ul class="breadcrumbs">--}}
{{--                    <li>--}}
{{--                        <a href="#">خانه</a><span><i class="icon-right-open"></i></span>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">   ورود به {{setting('site.name')}}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section" style="padding-top:50px; padding-bottom:0px; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->

                            </div>
                        </div>
                    </div>
                    <div class="section" style="padding-top:0px; padding-bottom:20px; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->

                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_column">
                                    <div class="column_attr ">
                                        <div id="contactWrapper">

                                            <h3 style="
    margin-top: 29%;
    font-size: 26px;
    font-weight: 500;
">متاسفیم! صفحه ای که به دنبال آن هستید وجود ندارد!</h3>                                           {{--<form action="{{route('course-list')}}">--}}
                                                {{--<div class="search_bar_error">--}}
                                                    {{--<input type="text" class="form-control" name="q" placeholder="به دنبال چه چیزی هستید؟">--}}
                                                    {{--<input type="submit" value="جستجو">--}}
                                                {{--</div>--}}
                                            {{--</form>--}}

                                        </div>

                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-second column_our_team">
                                    <!-- Team Member Area -->
                                    <div class="team team_vertical">
                                        <div class="image_frame no_link scale-with-grid">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="{{Storage::url('theme/404.jpg')}}" alt="404">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- One Fourth (1/4) Column -->

                                </div>
                            </div>
                        </div>
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


