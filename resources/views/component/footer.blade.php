<div class="section mcb-section mcb-section-lidfqp97d" id="contact"

     style="padding-top:1px;background-repeat:repeat-x;background-position:center bottom;background-image:url({{setting('background.footer')}}"
     data-id="#contact">
    <div class="section_wrapper mcb-section-inner" >
        <div class="wrap mcb-wrap mcb-wrap-oncoddvno one-second  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column mcb-item-r2fypeai6 one column_column"></div>
            </div>
        </div>
        <div class="wrap mcb-wrap mcb-wrap-zfqb1gkh4 one  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                {{--                    <div class="column mcb-column mcb-item-l0uvlpo5l one column_divider">--}}
                {{--                        <hr class="no_line" style="margin:0 auto 20px">--}}
                {{--                    </div>--}}
                {{--                    <div class="column mcb-column mcb-item-uyjf594u5 one column_column">--}}
                {{--                        <div class="column_attr clearfix align_center" style="">--}}
                {{--                            <h2> با ما در ارتباط باشید</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                <div class="column mcb-column mcb-item-u4tfbgc1t one-fourth column_column">
                    <div class="column_attr clearfix footer1" style="text-align: right;color:white;padding-right: 5%;">
                        <h4
                            class="themecolor">
                        </h4>
                        <h4 class="">لینک های مهم</h4>
                        <ul style="line-height: 32px;font-size: 15px;">
                            @if(setting('footer-link1'))
                                <li>
                                    <i class="icon-left-dir" style="color: #121d5e;"></i>
                                    <a href="{{setting('footer-link1')}}">وزارت علوم،تحقیقات و فناوری</a>
                                </li>
                                {!!setting_edit('footer-link1')!!}
                            @endif
                            @if(setting('footer-link2'))
                                <li>
                                    <i class="icon-left-dir" style="color: #121d5e;"></i>
                                    <a href="{{setting('footer-link2')}}">استعلام آنلاین گواهینامه</a>
                                </li>
                                {!!setting_edit('footer-link2')!!}
                            @endif
                            @if(setting('footer-link3'))
                                <li>
                                    <i class="icon-left-dir" style="color: #121d5e;"></i>
                                    <a href="{{setting('footer-link3')}}">دوره های حضوری (ویژه اصفهان)</a>
                                </li>
                                {!!setting_edit('footer-link3')!!}
                            @endif
                            @if(setting('footer-link4'))
                                <li >
                                    <i class="icon-left-dir" style="color: #121d5e;"></i>
                                    <a href="{{setting('footer-link4')}}">کمیته راهبری آموزش (وابسته به سازمان بورس و اوراق بهادار)</a>
                                </li>
                                {!!setting_edit('footer-link4')!!}
                            @endif

                        </ul>


                    </div>
                </div>
                <div class="column mcb-column mcb-item-fsx9fqodg one-fourth column_column">
                    <div class="column_attr clearfix footer1" style="text-align: center;color:white;padding-right: 5%;">
                        <h4
                            class="themecolor">
                        </h4>
                        <h4
                            class="">تماس با ما</h4>
                        <p class="black">{{setting('contact.address')}}</p>
                        {!!setting_edit('contact.address')!!}
                        {{--                            <img  src="{{Storage::url('theme/logo-footer.png')}}">--}}
                        <p class="black">شماره های تماس:<br>
                        <p class="black">{{setting('contact.phone')}}</p>
                        {!!setting_edit('contact.phone')!!}
                        <p class="black">
                            ایمیل روابط عمومی:
                        </p>

                        <a href="mailto:{{setting('contact.email')}}" class="black">
                            {{setting('contact.email')}}

                        </a>{!!setting_edit('contact.email')!!}

                        <br>
                        <br>
                        @if(setting('mapimage')!=null)
                            <div class="google-map-wrapper no_border">
                                <div class="gmap_canvas">
                                    <a href="{!! setting('iframegooglemapfooter')!!}"> <img src=" {!! setting('mapimage')!!}" style="width: 267px;height: 100px;"></a>
                                </div>

                            </div>
                        @endif
                        {!!setting_edit('mapimage')!!}

                    </div>
                </div>
                <div class="column mcb-column mcb-item-o7wckprp4 one-fourth column_column" style="padding: 0!important;">
                    <div class="column_attr clearfix footer1" style="border-radius: 30px;padding-right: 5%;">

                        <hr class="no_line" style="margin:0 auto 10px">
                        <div style="text-align: center;">
                            <h4
                                class="themecolor">
                            </h4>
                            <hr class="no_line" style="margin:0 auto 10px">
                            {!! setting('enamad.image') !!}

                            {!! setting('enamad.samandehi') !!}
                            <a href="https://www.msrt.ir/fa/grid/279/%D9%85%D9%88%D8%B3%D8%B3%D8%A7%D8%AA-%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B9%D8%A7%D9%84%DB%8C-%D8%A2%D8%B2%D8%A7%D8%AF?GridSearch%5Bsearch%5D=%D8%A8%D8%B1%D9%87%D8%A7%D9%86&GridSearch%5BpageSize%5D=10">
                                <img src="{{setting('footerimage')}}" alt="logo"></a>
                        </div>
                        {!!setting_edit('footerimage')!!}
                        <br>

                    </div>


                </div>
                <div class="column mcb-column mcb-item-fsx9fqodg one-fourth column_column">
                    <div class="column_attr clearfix footer1" style="text-align: right;color:white;padding-right: 5%;">
                        <h4
                            class="themecolor">
                        </h4>
                        <h4 class="black">
                            شبکه های اجتماعی : </h4>

                        <div class="row" style="color: black">

                                @if(setting('social-instagram1')!=null)

                                    <a class="socail" href="{{setting('social-instagram1')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">حقوق</p>

                                    {!!setting_edit('social-instagram1')!!}


                                @endif
                                @if(setting('social-instagram2')!=null)

                                    <a class="socail" href="{{setting('social-instagram2')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">مدیریت</p>

                                    {!!setting_edit('social-instagram2')!!}


                                @endif
                                @if(setting('social-instagram3')!=null)

                                    <a class="socail" href="{{setting('social-instagram3')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">کامپیوتر</p>

                                    {!!setting_edit('social-instagram3')!!}
                                @endif



                                @if(setting('social-instagram4')!=null)

                                    <a class="socail" href="{{setting('social-instagram4')}}">
                                        <i class="icon-instagram" style="float:right;;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">حسابداری</p>

                                    {!!setting_edit('social-instagram4')!!}

                                @endif
                                @if(setting('social-instagram5')!=null)

                                    <a class="socail" href="{{setting('social-instagram5')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">طراحی معماری</p>

                                    {!!setting_edit('social-instagram5')!!}

                                @endif
                                @if(setting('social-instagram6')!=null)

                                    <a class="socail" href="{{setting('social-instagram6')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">کارشناسی ارشد فراگیر</p>

                                    {!!setting_edit('social-instagram6')!!}

                                @endif
                                @if(setting('social-instagram7')!=null)

                                    <a class="socail" href="{{setting('social-instagram7')}}">
                                        <i class="icon-instagram" style="float:right;size: 10px "></i>
                                    </a>
                                    <p style="font-size: 15px">طراحی و مد</p>

                                    {!!setting_edit('social-instagram7')!!}

                                @endif


                            </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="widgets_wrapper">
    <div class="container">
    </div>
</div>
<div class="footer_copy">
    <div class="container">
        <div class="column one">
{{--            <a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>--}}

            <div class="copyright" style="text-align: center;">
                تمام حقوق این وبسایت برای موسسه آموزش عالی آزاد دانش پژوهان محفوظ است.


                {{--                            <a target="_blank" rel="nofollow" href="http://dpsoft.ir">dpsoft</a>--}}
            </div>
            <ul class="social"></ul>
        </div>
    </div>
</div>
