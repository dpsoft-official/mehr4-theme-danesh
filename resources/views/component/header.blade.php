<style>
    .search-wrapper input.search {
        background: url({{Storage::url('theme/search.svg')}}) no-repeat calc(100% - 166px) center;
    }
</style>
<div class="header_placeholder"></div>
<div id="Top_bar" class="is-sticky" style="top: 0px;">
    <div class="container">
        @if(setting('whatsapp-number'))
        <div class="" style="left: auto;right: 0;display: block;">
            <a id="" class=" " href="{{setting('whatsapp-number')}}" target="_blank" style="border-radius: 50%; position: fixed;bottom: 0px;right: 0px;margin: 20px;!important;z-index: 3; ">
                <img width="50px" src="/vendor/mehr4-theme-danesh/images/theme/whatsapp.svg" style="margin: 30px;">
            </a>
        </div>
        @endif
        <div class="column one">
            <div class="top_bar_left clearfix">
                <div class="logo">

                    <a id="logo" href="/" title="{{setting('site.name')}}"
                       data-height="" data-padding="15">
                        <img class="logo-main scale-with-grid" src="{{setting('site.logo')}}"
                             data-retina="{{setting('site.logo')}}"
                             data-height="34" alt="{{setting('site.name')}}">
                        <img class="logo-sticky scale-with-grid" src="{{setting('site.logo')}}"
                             data-retina="{{setting('site.logo')}}" data-height="34"
                             alt="{{setting('site.name')}}"></a>
                    {!!setting_edit('site.logo')!!}
                </div>
                <div class="menu_wrapper">
                    <nav id="menu">
                        <ul id="menu-main-menu" class="menu">
                            <li
                                @if(Route::currentRouteName()=='home') class="current-menu-item" @endif>
                                <a href="/"><span>خانه</span></a>
                            </li>
                            <li class="submenu">
                                <a href="{{route('course-list')}}">دپارتمان ها</a>
                                <ul class="sub-menu" style="display: none;">
                                        @foreach(Dpsoft\Mehr\Models\Category::whereFeatured(true)->take(6)->get() as $featuredCategory)
                                            <li id="menu-item-2958" class="submenu">
                                                <a href="{{$featuredCategory->courses_url}}"> {{$featuredCategory->title}}</a>
                                            </li>
                                        @endforeach
                                </ul>
                                <span class="menu-toggle"></span></li>

                            <li class="submenu "
                                @if(Route::currentRouteName()=='blog') class="current-menu-item" @endif>
                                <a href="{{route('blog')}}"><span>وبلاگ</span></a>
                                <ul class="sub-menu" style="display: none;">

                                        <li id="menu-item-2958" class="submenu">
                                            <a href="{{route('tag-posts', ['tag' => '4', 'name' => 'اخبار'])}}"> اخبار</a>
                                        </li>
                                    <li id="menu-item-2958" class="submenu">
                                        <a href="{{route('tag-posts', ['tag' => '5', 'name' => 'علمی'])}}"> علمی</a>
                                    </li>

                                </ul>
                                <span class="menu-toggle"></span></li>
                            <li class="submenu"
                                @if(Route::currentRouteName()=='about') class="current-menu-item" @endif>
                                <a href="{{route('about')}}"><span>درباره ما</span></a>

                            </li>
                            <li @if(Route::currentRouteName()=='contact') class="current-menu-item" @endif>
                                <a href="{{route('contact')}}"><span>تماس با ما</span></a>
                                <ul>

                                    <li @if(Route::currentRouteName()=='contact') class="current-menu-item" @endif>
                                        <a href="{{route('contact')}}"><span>ارتباط با ما</span></a>
                                    </li>
                                </ul>

                            @guest
                                @if (Route::has('register'))
                                    <li @if(Route::currentRouteName()=='login') class="current-menu-item" @endif>

                                        <a href="{{route('login')}}"><span> پنل کاربری </span></a>
                                    </li>

                        </ul>
                        @endif
                        @else
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li>
                                <a href="/panel"><span class="icon-user">

                                                           {{ Auth::user()->name }} </span> </a></li>

                            <li>
                                <a class="" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                                    <span>خروج</span>

                                </a>
                            </li>
                        @endguest
                    </nav>
                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                </div>
            </div>
            <div class="top_bar_right">
                <span class="search-wrapper">
                     <form role="search" id="searchform" action="{{route('course-list')}}">
          <input class="search" type="text" name="q" value="{{request('q')}}" placeholder=" جستجوی دوره">
          <span class="close"></span>
                     </form>
        </span>
            </div>
        </div>
    </div>
</div>
