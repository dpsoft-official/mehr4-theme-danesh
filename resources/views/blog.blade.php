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
                <div class="section mcb-section mcb-section-b2a472a43 bg-cover-ultrawide blog-page"
                     style="background-image: url({{setting('blogpageimage')}})">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap mcb-wrap-80efcb361 one valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column mcb-item-15855acd8 three-fourth column_column">
                                    <div class="column_attr clearfix">
                                        {!!setting_edit('blogpageimage')!!}
                                        <h2 style="color: #fff;text-align: center;">وبلاگ</h2>
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

                    </div>
                </div>
                <div class="section "
                     style="padding-top:2px;padding-bottom:0;background-color:#f7f7f7a3;background-image:url(/vendor/mehr4-theme-danesh/images/blog-bg.jpg);">
                    <div class="section_wrapper clearfix">
                        <div class="column one column_blog">
                            <div class="blog_wrapper isotope_wrapper">
                                <div class="posts_group lm_wrapper masonry col-3 isotope"
                                     style="position: relative; height: 924.312px;">

                                    @if($posts->count()!=0)
                                        @foreach($posts as $post)
                                            <div
                                                class="post-item isotope-item clearfix author-admin post-2279 post type-post status-publish format-standard has-post-thumbnail hentry category-news @foreach($post->tags as $tag) {{$tag->name}} @endforeach"
                                                style="position: absolute; left: 0px; top: 0px; height: 734px">
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
                                                                    {{str_limit($post->title,150,'...')}}

                                                                </a></h3>
                                                            {!!$post->edit_url_html!!}</div>
                                                        <div
                                                            class="post-excerpt">{!! str_limit(strip_tags($post->description),310,'...') !!}
                                                        </div>
                                                        <div class="post-footer" style="height: 48px;
    width: 394px;
    position: absolute;
    bottom: 0%;">
                                                            <div class="button-love ">
                                                                {{--                                                                        <span id="time-label" >{{$post->created_at}}</span>--}}
                                                                {{--                                                                                <span class=""><a class="author-blog"--}}
                                                                {{--                                                                                                  >{{$post->author->name}}</a></span>--}}
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
