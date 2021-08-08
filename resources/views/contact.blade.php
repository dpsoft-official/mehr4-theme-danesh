@extends("mehr4-theme-danesh::layout")
@section('class-body')
    layout-full-width mobile-tb-hide menu-line-below-80 menuo-right menuo-no-borders
    header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center
@endsection
@section('main')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section mcb-section-a3f7ec001 bg-cover-ultrawide contact-page" style="background-image: url('{{setting('headercontact')}}')">

                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-546702ce9 one valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-6ed2b940a three-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <h2 class="title" style="color: #fff;">تماس با ما{!!setting_edit('headercontact')!!}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-fa1b82a84 equal-height-wrap contact-head"
                         >
                        <div class="section_wrapper mcb-section-inner">
                            <div
                                class="wrap mcb-wrap mcb-wrap-9696ed212 one-second valign-top bg-cover clearfix contact-photo"
                                style="background-image: url('{{setting('contactimage')}}')">
                                                                {!!setting_edit('contactimage')!!}
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-e6b46ea98 one column_divider">
                                        <hr class="no_line" style="margin: 0 auto 400px;">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-ed69cc756 one-second valign-top clearfix"
                                 style="padding:70px 70px 25px;background-color:rgba(51, 51, 51, 0.78)">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-bc176c2c4 one column_column">
                                        <div class="column_attr clearfix">
                                            <h4 style="color: #ffffff; padding-bottom: 30px; border-bottom: 2px solid red; display: inline-block;">
                                                آدرس ما</h4>
                                            <hr class="no_line" style="margin: 0 auto 30px;color: red">
                                            <h5 class="address" style="color: #fff;">{{setting('contact.address')}}
                                                {!!setting_edit('contact.address')!!}

                                            </h5>
                                            <hr class="no_line" style="margin: 0 auto 30px;">
                                            <h5 style="color: #fff;"><i
                                                    class="icon-phone themecolor"></i>{{setting('contact.phone')}}{!!setting_edit('contact.phone')!!}</h5>
                                            <h5 style="color: #fff;"><i class="icon-mail themecolor"></i><a
                                                    href="mailto:{{setting('contact.email')}}"
                                                    style="color: white;">{{setting('contact.email')}}{!!setting_edit('contact.email')!!}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="section mcb-section equal-height contact-form-bg "
                             style="padding-top:100px; padding-bottom:1px; background-color:#5f5f5f;background-repeat:no-repeat;direction: rtl;text-align: right;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column  ">
                                            <div class="column_attr" style=" background-color:#f2f5f9;
    padding: 26px 8% 6px;">
                                                <h3 style="color:red;">ارسال پیام</h3>
                                                <hr class="no_line" style="margin: 0 auto 20px;"/>
                                                <div id="contactWrapper">
                                                    <form method="post" class="rtl" action="{{route('contact.create')}}"
                                                          id="contactform" autocomplete="off">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name"
                                               placeholder="نام خود را وارد کنید" required
                                               value="{{old('name')}}">

									</span>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone"
                                               placeholder="شماره تماس خود را وارد کنید"
                                               required {{old('phone')}}>

									</span>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                        <br>

                                                        <span class="input">
									<textarea class="input_field" id="message_contact" name="message"
                                              placeholder="پیام خود را وارد کنید"
                                              style="height:243px;" required>{{old('message')}}</textarea>

							</span>


                                                        <br>
                                                        <p class="add_top_30"><input type="submit" value="ارسال"
                                                                                     class="btn_1 rounded"
                                                                                     id="submit-contact"></p>
                                                    </form>

                                                </div>
                                                <hr class="no_line" style="margin: 0 auto 20px;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section full-width  " style="padding-top:0px; padding-bottom:0px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_map ">

                                            <div class="google-map-wrapper no_border">

                                                <div class="gmap_canvas">

                                                    {!! setting('iframegooglemap')!!}

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
        </div>
    </div>


@endsection
