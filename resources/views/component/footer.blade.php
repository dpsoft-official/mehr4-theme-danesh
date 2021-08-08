
    <div class="section mcb-section mcb-section-lidfqp97d" id="contact"
         style="padding-top:1px;background-repeat:repeat-x;background-position:center bottom;background-image:url({{setting('background.footer')}}"
         data-id="#contact">
        <div class="section_wrapper mcb-section-inner">
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
                    <div class="column mcb-column mcb-item-u4tfbgc1t one-second column_column">
                        <div class="column_attr clearfix footer1" style="text-align: center;color:white;">
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
                           <div class="google-map-wrapper no_border">
                                <div class="gmap_canvas" >
                                    {!! setting('iframegooglemapfooter')!!}
                                </div>

                            </div>
                            {!!setting_edit('iframegooglemapfooter')!!}


            {{--                             <hr class="no_line" style="margin:0 auto 10px">--}}
{{--                                                        {!! setting('enamad.image') !!}--}}
                                                    </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-o7wckprp4 one-second column_column">
                                                    <div class="column_attr clearfix footer1"
                                                         style="border-radius: 30px;">

                                                        <hr class="no_line" style="margin:0 auto 10px">
                                                        <div style="text-align: center;">
                                                              <h4
                                                              class="themecolor">
                                                              </h4>
                                                                  <img  src="{{setting('logofooter')}}">
                                                            {!!setting_edit('logofooter')!!}
                                                                   <hr class="no_line" style="margin:0 auto 10px">
                                                                    {!! setting('enamad.image') !!}

                                                                    {!! setting('enamad.samandehi') !!}
                                                            <a href="https://www.msrt.ir/fa/grid/279/%D9%85%D9%88%D8%B3%D8%B3%D8%A7%D8%AA-%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B9%D8%A7%D9%84%DB%8C-%D8%A2%D8%B2%D8%A7%D8%AF?GridSearch%5Bsearch%5D=%D8%A8%D8%B1%D9%87%D8%A7%D9%86&GridSearch%5BpageSize%5D=10">
                                                                <img  src="{{setting('footerimage')}}"></a>
                                                                     </div>
                                                        {!!setting_edit('footerimage')!!}
                                                        <br>
                                                        <br>
                                                        <p class="black">
                                                            در شبکه های اجتماعی با ما همراه شوید: </p>
                                                        <ul style="color: #000;">
                                                            @if(setting('social.instagram')!=null)
                                                            <li>
                                                                <a class="socail" style="" href="{{setting('social.instagram')}}"><i
                                                                        class="icon-instagram"></i></a>
                                                                <span>{{setting('social.instagram.text')}}</span>

                                                                {!!setting_edit('social.instagram')!!}
                                                            </li>
                                                            @endif
                                                                @if(setting('social.instagram2')!=null)
                                                                    <li>
                                                                        <a class="socail" style="" href="{{setting('social.instagram2')}}"><i
                                                                                class="icon-instagram"></i></a>
                                                                        <span>{{setting('social.instagram2.text')}}</span>
                                                                        {!!setting_edit('social.instagram2')!!}
                                                                    </li>
                                                                @endif
                                                                @if(setting('social.instagram3')!=null)
                                                                    <li>
                                                                        <a class="socail" style="" href="{{setting('social.instagram3')}}"><i
                                                                                class="icon-instagram"></i></a>
                                                                        <span>{{setting('social.instagram3.text')}}</span>
                                                                        {!!setting_edit('social.instagram3')!!}
                                                                    </li>
                                                                @endif
                                                                @if(setting('social.instagram4')!=null)
                                                                    <li>
                                                                        <a class="socail" style="" href="{{setting('social.instagram4')}}"><i
                                                                                class="icon-instagram"></i></a>
                                                                        <span>{{setting('social.instagram4.text')}}</span>
                                                                        {!!setting_edit('social.instagram4')!!}
                                                                    </li>
                                                                @endif
                                                                @if(setting('social.instagram5')!=null)
                                                                    <li>
                                                                        <a class="socail" style="" href="{{setting('social.instagram5')}}"><i
                                                                                class="icon-instagram"></i></a>
                                                                        <span>{{setting('social.instagram5.text')}}</span>
                                                                        {!!setting_edit('social.instagram5')!!}
                                                                    </li>
                                                                @endif
                                                                @if(setting('social.telegram')!=null)
                                                                    <li>
                                                                        <a class="socail" style="" href="{{setting('social.telegram')}}"><i
                                                                                class="icon-telegram"></i></a>
                                                                        <span>{{setting('social.telegram.text')}}</span>
                                                                        {!!setting_edit('social.telegram')!!}
                                                                    </li>
                                                                @endif

                                                        </ul>

{{--                                                        <p style="color: #000;">--}}

{{--                                                            @if(setting('social.instagram')!=null)--}}
{{--                                                                <a class="socail" style="" href="{{setting('social.instagram')}}"><i--}}
{{--                                                                        class="icon-instagram"></i></a>--}}
{{--                                                                    {!!setting_edit('social.instagram')!!}--}}
{{--                                                            @endif--}}

{{--                                                                @if(setting('social.instagram2')!=null)--}}
{{--                                                                    <a class="socail" style="" href="{{setting('social.instagram2')}}"><i--}}
{{--                                                                            class="icon-instagram"></i></a>--}}
{{--                                                                    {!!setting_edit('social.instagram2')!!}--}}
{{--                                                                @endif--}}

{{--                                                                @if(setting('social.instagram3')!=null)--}}
{{--                                                                    <a class="socail" style="" href="{{setting('social.instagram3')}}"><i--}}
{{--                                                                            class="icon-instagram"></i></a>--}}
{{--                                                                    {!!setting_edit('social.instagram3')!!}--}}
{{--                                                                @endif--}}

{{--                                                                @if(setting('social.instagram4')!=null)--}}
{{--                                                                    <a class="socail" style="" href="{{setting('social.instagram4')}}"><i--}}
{{--                                                                            class="icon-instagram"></i></a>--}}
{{--                                                                    {!!setting_edit('social.instagram4')!!}--}}
{{--                                                                @endif--}}

{{--                                                                @if(setting('social.instagram5')!=null)--}}
{{--                                                                    <a class="socail" style="" href="{{setting('social.instagram5')}}"><i--}}
{{--                                                                            class="icon-instagram"></i></a>--}}
{{--                                                                    {!!setting_edit('social.instagram5')!!}--}}
{{--                                                                @endif--}}

{{--                                                                @if(setting('social.telegram')!=null)--}}
{{--                                                                    <a class="socail" href="{{setting('social.telegram')}}"><i--}}
{{--                                                                            class="icon-paper-plane-line"></i></a>--}}
{{--                                                                    {!!setting_edit('social.telegram')!!}--}}
{{--                                                                @endif--}}

{{--                                                        </p>--}}
                                                                 </div>


                        </div>
                    </div>
                </div>
                {{--            <div class="column mcb-column mcb-item-fsx9fqodg one-third column_column">--}}
                {{--                <div class="column_attr clearfix footer1"--}}
                {{--                     style="padding:50px 15% 35px;border-radius: 30px;height: 20rem;">--}}

                {{--                    <p style="color: white;">--}}
                {{--                        از طریق ارسال ایمیل با ما در ارتباط باشید:--}}
                {{--                    </p>--}}

                {{--                  <a href="mailto:{{setting('contact.email')}}" style="color: #fff;"> {{setting('contact.email')}}</a>--}}
                {{--                    --}}{{--                        <h4--}}
                {{--                    --}}{{--                            class="themecolor">شبکه های اجتماعی</h4>--}}
                {{--                    <hr class="no_line" style="margin:0 auto 10px">--}}
                {{--                    <p style="color: #fff;">شماره تماس:<br>--}}
                {{--                    <p style="color: white;">       {{setting('contact.phone')}}</p>--}}

                {{--                    <p style="color: white;">--}}
                {{--                        در شبکه های اجتماعی با ما همراه شوید: </p>--}}
                {{--                    <p style="color: #fff;">--}}
                {{--                        @if(setting('social.facebook')!=null)--}}
                {{--                            <a class="socail" href="{{setting('social.facebbok')}}"><i--}}
                {{--                                    class="icon-facebook-circled"></i></a>--}}
                {{--                        @endif--}}
                {{--                        @if(setting('social.telegram')!=null)--}}
                {{--                            <a class="socail" href="{{setting('social.telegram')}}"><i--}}
                {{--                                    class="icon-paper-plane-line"></i></a>--}}
                {{--                        @endif--}}
                {{--                        @if(setting('social.instagram')!=null)--}}
                {{--                            <a class="socail" style="" href="{{setting('social.instagram')}}"><i--}}
                {{--                                    class="icon-instagram"></i></a>--}}
                {{--                        @endif  @if(setting('social.twitter')!=null)--}}
                {{--                            <a class="socail" style="" href="{{setting('social.twitter')}}"><i--}}
                {{--                                    class="icon-twitter-circled"></i></a>--}}
                {{--                        @endif--}}
                {{--                    </p>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    </div>
    <div class="widgets_wrapper">
        <div class="container">
        </div>
    </div>
    <div class="footer_copy">
        <div class="container">
            <div class="column one"><a id="back_to_top" class="button button_js" href=""><i
                        class="icon-up-open-big"></i></a>

                {{--            <div class="copyright" style="text-align: center;">--}}
                {{--                طراحی در--}}

                {{--                <a target="_blank" rel="nofollow" href="http://dpsoft.ir">dpsoft</a>--}}
                {{--            </div>--}}
                <ul class="social"></ul>
            </div>
        </div>
    </div>
















{{--@if(setting('footer')=='true')--}}
{{--<div class="section mcb-section mcb-section-lidfqp97d" id="contact"--}}
{{--     style="padding-top:1px;background-repeat:repeat-x;background-position:center bottom;"--}}
{{--     data-id="#contact">--}}
{{--    <div class="section_wrapper mcb-section-inner">--}}
{{--        <div class="wrap mcb-wrap mcb-wrap-oncoddvno one-third  valign-top clearfix" style="">--}}
{{--            <div class="mcb-wrap-inner">--}}
{{--                <div class="column mcb-column mcb-item-r2fypeai6 one column_column"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="wrap mcb-wrap mcb-wrap-zfqb1gkh4 one  valign-top clearfix" style="">--}}
{{--            <div class="mcb-wrap-inner">--}}
{{--                <div class="column mcb-column mcb-item-l0uvlpo5l one column_divider">--}}
{{--                    <hr class="no_line" style="margin:0 auto 20px">--}}
{{--                </div>--}}
{{--                <div class="column mcb-column mcb-item-uyjf594u5 one column_column">--}}
{{--                    <div class="column_attr clearfix align_center" style="">--}}
{{--                        <h2> با ما در ارتباط باشید</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column mcb-column mcb-item-u4tfbgc1t one-third column_column">--}}
{{--                    <div class="column_attr clearfix footer1" style="text-align: center;">--}}
{{--                        <h4--}}
{{--                            class="themecolor">--}}
{{--                        </h4>--}}
{{--                        <img  src="{{Storage::url('theme/logo-footer.png')}}">--}}
{{--                        <hr class="no_line" style="margin:0 auto 10px">--}}
{{--                        {!! setting('enamad.image') !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column mcb-column mcb-item-o7wckprp4 one-third column_column">--}}
{{--                    <div class="column_attr clearfix footer1"--}}
{{--                         style="padding:50px 15% 35px;border-radius: 30px;"><h4--}}
{{--                            class="themecolor">آدرس ما</h4>--}}
{{--                        <p style="color: #fff;">{{setting('contact.address')}}</p>--}}

{{--                        <hr class="no_line" style="margin:0 auto 10px">--}}
{{--                        <div class="google-map-wrapper no_border">--}}

{{--                            <div class="gmap_canvas" >--}}

{{--                                {!! setting('iframegooglemapfooter')!!}--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <p style="color: white;">24 ساعت شبانه روز را پاسخگو خواهیم بود</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="column mcb-column mcb-item-fsx9fqodg one-third column_column">--}}
{{--                <div class="column_attr clearfix footer1"--}}
{{--                     style="padding:50px 15% 35px;border-radius: 30px;height: 20rem;">--}}

{{--                    <p style="color: white;">--}}
{{--                        از طریق ارسال ایمیل با ما در ارتباط باشید:--}}
{{--                    </p>--}}

{{--                  <a href="mailto:{{setting('contact.email')}}" style="color: #fff;"> {{setting('contact.email')}}</a>--}}
{{--                    --}}{{--                        <h4--}}
{{--                    --}}{{--                            class="themecolor">شبکه های اجتماعی</h4>--}}
{{--                    <hr class="no_line" style="margin:0 auto 10px">--}}
{{--                    <p style="color: #fff;">شماره تماس:<br>--}}
{{--                    <p style="color: white;">       {{setting('contact.phone')}}</p>--}}

{{--                    <p style="color: white;">--}}
{{--                        در شبکه های اجتماعی با ما همراه شوید: </p>--}}
{{--                    <p style="color: #fff;">--}}
{{--                        @if(setting('social.facebook')!=null)--}}
{{--                            <a class="socail" href="{{setting('social.facebbok')}}"><i--}}
{{--                                    class="icon-facebook-circled"></i></a>--}}
{{--                        @endif--}}
{{--                        @if(setting('social.telegram')!=null)--}}
{{--                            <a class="socail" href="{{setting('social.telegram')}}"><i--}}
{{--                                    class="icon-paper-plane-line"></i></a>--}}
{{--                        @endif--}}
{{--                        @if(setting('social.instagram')!=null)--}}
{{--                            <a class="socail" style="" href="{{setting('social.instagram')}}"><i--}}
{{--                                    class="icon-instagram"></i></a>--}}
{{--                        @endif  @if(setting('social.twitter')!=null)--}}
{{--                            <a class="socail" style="" href="{{setting('social.twitter')}}"><i--}}
{{--                                    class="icon-twitter-circled"></i></a>--}}
{{--                        @endif--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="widgets_wrapper">--}}
{{--    <div class="container">--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="footer_copy">--}}
{{--    <div class="container">--}}
{{--        <div class="column one"><a id="back_to_top" class="button button_js" href=""><i--}}
{{--                    class="icon-up-open-big"></i></a>--}}

{{--            <div class="copyright" style="text-align: center;">--}}
{{--                طراحی در--}}

{{--                <a target="_blank" rel="nofollow" href="http://dpsoft.ir">dpsoft</a>--}}
{{--            </div>--}}
{{--            <ul class="social"></ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endif--}}
