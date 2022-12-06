@extends("mehr4-theme-danesh::layout")
@section('class-body')
    color-custom style-simple
    layout-full-width nice-scroll-on mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center
@endsection
@section('main')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">

                    <div class="section mcb-section mcb-section-b2a472a43 bg-cover-ultrawide about-page" style="background-image: url({{setting('headerabout')}})" >
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-80efcb361 one valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-15855acd8 three-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <h2 style="color: #fff;text-align: center;">درباره ما</h2>{!!setting_edit('headerabout')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="section mcb-section mcb-section-pe1l1nxrw equal-height-wrap about-section2" >
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-z5rkvuq6q one-second valign-middle clearfix" style="height: 800px;">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-qco8csxfx one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid about-page-pic " alt="{{setting('site.name')}}"  src="{{setting('aboutimg')}}">
                                                {!!setting_edit('aboutimg')!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-a1pwxv3mf one-second valign-middle clearfix about-section" style=" height: 800px;">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-mogwt99we one column_column">
                                        <div class="column_attr clearfix">
                                            <h2>درباره ما بیشتر بدانید</h2>
                                            <hr class="no_line" style="margin: 0 auto 15px;">
                                            <hr class="no_line" style="margin: 0 auto 15px;">
                                            <p class="content-about">
                                                {{setting('site.about')}}
                                            </p>
                                            {!!setting_edit('site.about')!!}

                                            @if(setting('about.item1'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item1')}}</span>
                                            </li>
                                                {!!setting_edit('about.item1')!!}
                                            @endif
                                            @if(setting('about.item2'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item2')}}</span>
                                            </li>
                                                {!!setting_edit('about.item2')!!}
                                            @endif
                                            @if(setting('about.item3'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item3')}}</span>
                                            </li>
                                                {!!setting_edit('about.item3')!!}
                                            @endif
                                            @if(setting('about.item4'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item4')}}</span>
                                            </li>
                                                {!!setting_edit('about.item4')!!}
                                            @endif
                                            @if(setting('about.item5'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item5')}}</span>
                                            </li>
                                                {!!setting_edit('about.item5')!!}
                                            @endif
                                            @if(setting('about.item6'))
                                            <li class="right" style="list-style: none">
                                                <i class="icon-check"></i>
                                                <span class="about-item">{{setting('about.item6')}}</span>
                                            </li>
                                                {!!setting_edit('about.item6')!!}
                                            @endif
                                            <br>

                                            <p class="content-about">
                                                {{setting('site.about2')}}
                                            </p>
                                            {!!setting_edit('site.about2')!!}
                                            <p class="content-about">
                                                {{setting('site.about3')}}
                                            </p>
                                            {!!setting_edit('site.about3')!!}

                                            <hr class="no_line" style="margin: 0 auto 15px;">
                                            <div class=container" >
                                                <div class="column_attr clearfix" style="background-color:#121d5e;padding:10px ;border-radius: 30px;">
                                                    <a href="https://heis.msrt.ir/">
                                                        <h2 class="" style="text-align: center;font-size: 1.3rem;color:white">استعلام گواهینامه</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    @if(setting('team')!=null)
                    <div class="section mcb-section mcb-section-casglen6u team-section">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-agldg0qib one valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-cgmj1hj2o one column_column">
                                        <div class="column_attr clearfix">
                                            <h2>با تیم ما آشنا شوید</h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-v0208b95v one column_divider">
                                        <hr class="no_line" style="margin: 0 auto 40px;">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-lts4634xc one-fourth column-margin-0px valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-wa0jmo5tn one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="{{setting('team1image')}}"
                                                                            alt="{{setting('site.name')}}">
                                                {!!setting_edit('team1image')!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-yxb1bmhoq one column_column">
                                        <div class="column_attr clearfix align_center" style="background-color:red;padding:0 0 6px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-hgxsy5bhs one-fourth valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-z006kiysq one column_column">
                                        <div class="column_attr clearfix" style="padding:40px 5% 0 15%;">
                                            <h4>{{setting('team1')}} {!!setting_edit('team1')!!}</h4>

                                            <p>
                                                {{setting('team1-job')}}
                                                {!!setting_edit('team1-job')!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-wiz4rpst0 one-fourth column-margin-0px valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-9qjwwvqf0 one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="{{setting('team2image')}}"
                                                                            alt="{{setting('site.name')}}">
                                                {!!setting_edit('team2image')!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-yxb1bmhoq one column_column">
                                        <div class="column_attr clearfix align_center" style="background-color:red;padding:0 0 6px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-yoc79y917 one-fourth valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-57dgjlhjb one column_column">
                                        <div class="column_attr clearfix" style="padding:40px 5% 0 15%;">
                                            <h4>{{setting('team2')}}</h4>
                                            {!!setting_edit('team2')!!}
                                            <p>
                                                {{setting('team2-job')}}
                                                {!!setting_edit('team2-job')!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-lsr3rnelu one valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-e9r5rrz30 one column_divider">
                                        <hr class="no_line hr-team" >
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-vwmio6vjp one-fourth column-margin-0px valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-mhuqzf6tf one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"  alt="{{setting('site.name')}}" src="{{setting('team3image')}}">

                                                {!!setting_edit('team3image')!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-9yco5ko6z one column_column">
                                        <div class="column mcb-column mcb-item-yxb1bmhoq one column_column">
                                            <div class="column_attr clearfix align_center" style="background-color:red;padding:0 0 6px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-67549nlgc one-fourth valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-nxd1p47xb one column_column">
                                        <div class="column_attr clearfix" style="padding:40px 5% 0 15%;">
                                            <h4>{{setting('team3')}}{!!setting_edit('team3')!!}</h4>
                                            <p>
                                                {{setting('team3-job')}}{!!setting_edit('team3-job')!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-7c01rnofi one-fourth column-margin-0px valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-nu2gi03bt one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" alt="{{setting('site.name')}}" src="{{setting('team4image')}}">
                                                {!!setting_edit('team4image')!!}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-uu778qb9c one column_column">
                                        <div class="column mcb-column mcb-item-yxb1bmhoq one column_column">
                                            <div class="column_attr clearfix align_center" style="background-color:red;padding:0 0 6px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-lmfs3ysh7 one-fourth valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-zzld3smg3 one column_column">
                                        <div class="column_attr clearfix" style="padding:40px 5% 0 15%;">
                                            <h4>{{setting('team4')}}{!!setting_edit('team4')!!}</h4>
                                            <p>
                                                {{setting('team4-job')}}{!!setting_edit('team4-job')!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endif
                </div>
            </div>
        </div>
    </div>

@endsection
