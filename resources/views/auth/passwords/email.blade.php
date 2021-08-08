@extends("mehr4-theme-taghchemajazi::layout")
@section('class-body')
    color-custom style-simple
    layout-full-width nice-scroll-on mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center
@endsection
@section('main')

    <div  class="login-header"  >

        <div class="container">
            <div class="column one">
                <h2 style="color: #fff;text-align: center;"> تغییر رمز</h2>
            </div>
        </div>
    </div>
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

                                            {{--<h3>--}}
                                                {{--فرم زیر را جهت ورود به سایت پر کنید--}}
                                            {{--</h3>--}}
                                            <br>
                                            <br>
                                            <div id="login">
                                                <aside>

                                                    @if (session('status'))
                                                        <h6 class="alert alert-success text-center" role="alert">
                                                            {{ session('status') }}
                                                        </h6>
                                                    @endif
                                                    <form method="POST" action="{{ route('password.email') }}">
                                                        @csrf
                                                        <div class="form-group">

					<span class="input">
                        <label class="input_label">
						<span class="input__label-content"></span>
					</label>
                         <div class="column one one2">
					<input type="email" name="email"  placeholder="ایمیل شما" value="{{ old('email') }}" required class="em" >
                         </div>
					</span>
                                                            <br>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn_1 rounded full-width add_top_60 " id="buy-course"> تغییر پسورد</button>
                                                    </form>

                                                </aside>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-second column_our_team">
                                    <!-- Team Member Area -->
                                    <div class="team team_vertical">
                                        <img class="scale-with-grid" src="{{Storage::url('theme/register.png')}}" alt="{{setting('site.name')}}">
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
