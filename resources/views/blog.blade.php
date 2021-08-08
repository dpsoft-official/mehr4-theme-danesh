@extends("mehr4-theme-danesh::layout")
@section('class-body')
    color-custom style-simple layout-full-width mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center nice-scroll
@endsection
@section('main')
                    <div id="Content" style="background-color: #fef9f3;">
                        <div class="content_wrapper clearfix">
                            <div class="sections_group">
                                <div class="section mcb-section mcb-section-b2a472a43 bg-cover-ultrawide blog-page" style="background-image: url({{setting('blogpageimage')}})">
                                    <div class="section_wrapper mcb-section-inner">
                                        <div class="wrap mcb-wrap mcb-wrap-80efcb361 one valign-top clearfix" style="">
                                            <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-15855acd8 three-fourth column_column">
                                                    <div class="column_attr clearfix">
                                                        {!!setting_edit('blogpageimage')!!}
                                                        <h2 style="color: #fff;text-align: center;">وبلاگ</h2>
{{--                                                        <h2 style="color: #fff;text-align: center;">--}}
{{--                                                                @if(Route::currentRouteName()!=='author-posts-nevise')--}}
{{--                                                                                    وبلاگ--}}
{{--                                                                                @if(!empty($category))--}}
{{--                                                                           «{{$category->title}}»--}}
{{--                                                                                @endif--}}
{{--                                                                                @if(!empty($query))--}}
{{--                                                                                  «{{$query}}»--}}
{{--                                                                                @endif--}}
{{--                                                                            @endif--}}
{{--                                                                            @if(Route::currentRouteName()=='author-posts-nevise')--}}
{{--                                                                                <div id="Subheader-auth" class=""--}}
{{--                                                                                     style="padding:1px 0;">--}}
{{--                                                                                    <div class="container">--}}
{{--                                                                                        <div class="column one">--}}
{{--                                                                                                وبلاگ--}}
{{--                                                                                            @if(!empty($category))--}}
{{--                                                                                                <div>--}}
{{--                                                                                                    <br>--}}
{{--                                                                                                    <h2><small class="cat-title"> «{{$category->title}}»</small></h2>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            @endif--}}
{{--                                                                                            @if(!empty($query))--}}
{{--                                                                                                <div>--}}
{{--                                                                                                    <br>--}}
{{--                                                                                                    <h2 class="query-title" style="text-align: center;">--}}
{{--                                                                                                        «{{$query}}»--}}
{{--                                                                                                    </h2>--}}
{{--                                                                                                </div>--}}

{{--                                                                                            @endif--}}
{{--                                                                                        </div>--}}
{{--                                                                                        @endif--}}
{{--                                                                                        @if(Route::currentRouteName()=='author-posts-nevise')--}}
{{--                                                                                            <div class="medium-12 cell content-auther" style="text-align: center">--}}
{{--                                                                                                <img--}}
{{--                                                                                                    src="{{$posts->first()->author->meta['avatar']? Storage::url($posts->first()->author->meta['avatar']):asset('/vendor/mehr4-theme-danesh/images/user.png')}}"--}}
{{--                                                                                                    alt="{{$posts->first()->author->name}}" style="margin-bottom: 2%;">--}}
{{--                                                                                                <br>--}}
{{--                                                                                                <h4>{{$posts->first()->author->meta['bio']??'   '}}</h4>--}}
{{--                                                                                                <br>--}}
{{--                                                                                                <h4>--}}
{{--                                                                                                    <b style="color: white;"> تعداد کل نوشته ها--}}
{{--                                                                                                        : {{$posts->first()->author->posts->count()}}</b>--}}
{{--                                                                                                </h4>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        @endif--}}

{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}

{{--                                                        </h2>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="extra_content">
                                    <div class="section the_content no_content">
                                        <div class="section_wrapper">
                                            <div class="the_content_wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section section-filters">
                                    <div class="section_wrapper clearfix">

{{--                                        <div id="Filters" class="column two-second ">--}}
{{--                                            <ul class="filters_buttons">--}}
{{--                                                <li class="reset"><a class="close1" data-rel="*"--}}
{{--                                                                     href="{{route('blog')}}"><i--}}
{{--                                                            class="icon-cancel"></i>نمایش همه</a></li>--}}
{{--                                                <li class="label">فیلتر</li>--}}
{{--                                                <li class="categories"><a class="open" href="#"><i--}}
{{--                                                            class="icon-docs"></i>دسته بندی<i--}}
{{--                                                            class="icon-down-dir"></i></a></li>--}}
{{--                                                <li class="tags">--}}
{{--                                                    <a class="open" href="#"><i class="icon-tag"></i>تگ<i--}}
{{--                                                            class="icon-down-dir"></i></a>--}}
{{--                                                </li>--}}
{{--                                                --}}{{--                                <li class="authors"><a class="open" href=""><i class="icon-user"></i>نویسنده<i class="icon-down-dir"></i></a></li>--}}

{{--                                            </ul>--}}
{{--                                            <div class="filters_wrapper">--}}
{{--                                                <ul class="categories">--}}
{{--                                                    <li class="reset-inner"><a data-rel="*"--}}
{{--                                                                               href="{{route('blog')}}">همه</a></li>--}}
{{--                                                    @foreach(\NeviseMehr4::categories() as $category)--}}
{{--                                                        <li><a data-rel=".{{$category->title}}"--}}
{{--                                                               href="{{$category->posts_url}}">{{$category->title}}</a>--}}
{{--                                                        </li>--}}
{{--                                                    @endforeach--}}
{{--                                                    <li class="close"><a href="#"><i class="icon-cancel"></i></a></li>--}}
{{--                                                </ul>--}}

{{--                                                <ul class="tags">--}}
{{--                                                    <li class="reset-inner"><a data-rel="*"--}}
{{--                                                                               href="{{route('blog')}}">همه</a></li>--}}
{{--                                                    @foreach(\NeviseMehr4::postTopTags() as $tag)--}}
{{--                                                        <li><a data-rel=".{{$tag->name}}"--}}
{{--                                                               href="{{\NeviseMehr4::tagPostsUrl($tag)}}">{{$tag->name}}</a>--}}
{{--                                                        </li>--}}
{{--                                                    @endforeach--}}
{{--                                                    <li class="close"><a href="#"><i class="icon-cancel"></i></a></li>--}}
{{--                                                </ul>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                                <div class="section " style="padding-top:2px;padding-bottom:0;background-color:#f7f7f7a3;background-image:url(/vendor/mehr4-theme-danesh/images/blog-bg.jpg);">
                                    <div class="section_wrapper clearfix">
                                        <div class="column one column_blog">
                                            <div class="blog_wrapper isotope_wrapper">
                                                <div class="posts_group lm_wrapper masonry col-3 isotope"
                                                     style="position: relative; height: 924.312px;">

                                                    @if($posts->count()!=0)
                                                        @foreach($posts as $post)
                                                            <div
                                                                class="post-item isotope-item clearfix author-admin post-2279 post type-post status-publish format-standard has-post-thumbnail hentry category-news @foreach($post->tags as $tag) {{$tag->name}} @endforeach"
                                                                style="position: absolute; left: 0px; top: 0px;">
                                                                <div class="date_label"></div>
                                                                <div
                                                                    class="image_frame post-photo-wrapper scale-with-grid image">
                                                                    <div class="image_wrapper">
                                                                        <div class="container-img">

                                                                            <img src="{{Storage::url($post->image)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-desc-wrapper">
                                                                    <div class="post-desc">
                                                                        <div class="post-head"></div>

                                                                        <div class="post-title">

                                                                            <h3 itemprop="headline">
                                                                                <a
                                                                                    href="{{$post->url}}">
                                                                                    {{\Illuminate\Support\Str::limit($post->title,20,'...')}}

                                                                                </a></h3>
                                                                            {!!$post->edit_url_html!!}</div>
                                                                        <div
                                                                            class="post-excerpt">{!! \Illuminate\Support\Str::limit(strip_tags($post->description),310,'...') !!}
                                                                        </div>
                                                                        <div class="post-footer">
                                                                            <div class="button-love ">
                                                                                {{--                                                                        <span id="time-label" >{{$post->created_at}}</span>--}}
                                                                                <span class=""><a class="author-blog"
                                                                                                  >{{$post->author->name}}</a></span>
                                                                            </div>
                                                                            <div class="post-links">
                                                                                <i class="icon-doc-text"></i> <a
                                                                                    href="{{$post->url}}"
                                                                                    class="post-more">ادامه
                                                                                    مطلب</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        {{$posts->render('mehr4-theme-danesh::pagination.custom')}}
                                                    @else
                                                        <h2 class="notfound-search">مقاله ای یافت نشد</h2>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
