@extends("mehr4-theme-danesh::layout")
@section('class-body')
    color-custom style-simple layout-full-width mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center nice-scroll
@endsection
<style>
    .right {
        text-align: right !important;
    }
</style>
@section('main')
    <div id="Intro" class=" parallax" data-parallax="3d">
        <img class="mfn-parallax" src="{{Storage::url($course->image)}}"
             style="width: 1835px; height: 594.464px;" alt="{{$course->title}}">
        <div class="intro-inner">
            <h1 class="intro-title">
                {{$course->title}}
            </h1>
        </div>
        <div class="intro-next">
            <i class="icon-down-open-big"></i>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div>
                    <div class="post-wrapper-content" style="background-color: white;">
                        <div class="section mcb-section post-section">
                            <div class="section_wrapper mcb-section-inner sidebar-inner">
                                <div class="mobile-show">
                                    <div class="mcb-wrap-inner">
                                        <div class="image_wrapper" style="text-align: center;">
                                            <div class="get_in_touch course-sidebar">
                                                <div class="get_in_touch_wrapper">
                                                    <div class="icon_box icon_position_top has_border image_wrapper1"
                                                         style="padding:10px">
                                                        <div class="desc ">
                                                            <img
                                                                src="{{Storage::url($course->avatar)}}"
                                                                alt="{{$course->title}}"
                                                                class="img-fluid" style="margin-top: 2%;">

                                                        </div>
                                                        {{$course->title}}
                                                    </div>
                                                    <ul>

                                                        @if (isset($course->meta['discount']))
                                                            @if (is_numeric($course->meta['discount']))
                                                                <h3
                                                                    {{--                                                                    style="background-color:#e6e1e17a;"--}}
                                                                >
                                                                    <del>          <span class="num" style="color: red">
                                {{number_format($course->meta['discount']/10)}}
                                                            </span></del>
                                                                    تومان
                                                                    @endif
                                                                    @endif
                                                                    <br>
                                                                    <span class="num" style="color: green">
                                {{number_format($course->price/10)}}
                                                            </span>تومان
                                                                </h3>
                                                                <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">
                                                                    <input type="button" value="ثبت نام" id="submit"
                                                                           class="btn-reg" style="width: 95%;">
                                                                </a>
                                                                <li class="phone">
                                                                    <p style="font-weight: bold">مشخصات دوره:</p>
                                                                </li>
                                                                @if (isset($course->meta['code']))
                                                                    <li class="right">
                                                                        <i class="icon-check"></i><span
                                                                            class="item-course"> کد دوره :
                                                                {{$course->meta['code']}}</span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['hour-time']))
                                                                    <li class="right"><i class=" icon-clock"></i><span
                                                                            class="item-course"> ساعت آموزشی :
                                                                {{$course->meta['hour-time']}}</span></li>
                                                                @endif
                                                                @if (isset($course->meta['certificate']))
                                                                    <li class="right"><i class="icon-vcard"></i><span
                                                                            class="item-course"> گواهینامه:
                                                                {{$course->meta['certificate']}}</span></li>
                                                                @endif
                                                                @if (isset($course->meta['time-course']))
                                                                    <li class="right"><i class="icon-clock"></i><span
                                                                            class="item-course">  طول دوره:
                                                                {{$course->meta['time-course']}}
                                                            </span>
                                                                    </li>
                                                                @endif
                                                                <span class="icon"></span>
                                                                @if($course->maximum_students!=0)
                                                                    <li class="right"><i class="icon-hourglass"></i>
                                                                        <span class="item-course">ظرفیت باقی مانده :
                                                            {!! $course->maximum_students !!}
                                                            </span>
                                                                    </li>
                                                                @endif
                                                                @if($course->enrolled_students!=0)
                                                                    <li class="right"><i class="icon-doc"></i>
                                                                        <span class="item-course">تعداد افراد دوره :
                                                                           {!! $course->enrolled_students !!}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['level']))
                                                                    <li class="right"><i class="icon-doc-text"></i>
                                                                        <span class="item-course"> سطح مهارت:
                                                                          {{$course->meta['level']}}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['sectioncount']))
                                                                    <li class="right"><i class=" icon-info"></i>
                                                                        <span class="item-course"> تعداد سر فصل ها:
                                                                         {{$course->meta['sectioncount']}}
                                                                         </span>
                                                                    </li>
                                                                @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="wrap mcb-wrap four-fifth valign-top clearfix"
                                     style="padding:2px 2% 4px 5px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h3 class="post-title-blog"
                                                    style="margin-bottom: 5px;">
                                                </h3>
                                                {!!$course->edit_url_html!!}
                                                <br>
                                                <p class="desc-post">
                                                    {!! $course->description !!}
                                                </p>
                                            </div>
                                                @if(\Gate::allows('view',$course) And $course->sections->count()>0)
                                            <div class="section" style="background-color: white">
                                                <div>
                                                    <div class="column one column_blog">
                                                        <section id="lessons" style="margin-top: 2px;">
                                                            <div class="intro_title">
                                                                <h3>سرفصل ها</h3>
                                                                <ul>
                                                                    <li>{{$course->sectionCount}}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="accordion">
                                                                <div class="mfn-acc accordion_wrapper open1st">
                                                                    @foreach($course->sections as $index=>$section)
                                                                        <div class="question {{$index==0 ? 'active' : ''}}">
                                                                            <div class="title" id="heading{{$loop->index}}" style="padding: 8px;margin: 3px 40px;border-radius: 8px">
                                                                                <i class="icon-plus acc-icon-plus"></i>
                                                                                <i class="icon-minus acc-icon-minus"></i>
                                                                                <a>
                                                                                    <h6 class="">
                                                                                        <a class="{{$loop->index==0?'':'collapsed'}}"
                                                                                           data-toggle="collapse"
                                                                                           href="#collapse{{$loop->index}}"
                                                                                           aria-expanded="{{$loop->index==0?'true':'false'}}"
                                                                                           aria-controls="collapse{{$loop->index}}"><i
                                                                                                class="icon-{{$loop->index==0?'minus':'plus'}}"></i> {{$section->title}}
                                                                                        </a>
                                                                                    </h6>
                                                                                </a>
                                                                            </div>

                                                                            <div class="answer" id="collapse{{$loop->index}}"
                                                                                 class="collapse {{$loop->index==0?'show':''}}"
                                                                                 aria-labelledby="heading{{$loop->index}}"
                                                                                 data-parent="#accordion_lessons">

                                                                                <div class="card-body">
                                                                                    <div class="list_lessons" style="padding: 8px;margin: 3px 40px;border-radius: 8px">
                                                                                        <ul>
                                                                                            @foreach($section->lessons as $lesson)
                                                                                                <li>
{{--                                                                                                    @if($lesson->preview==false  )--}}
{{--                                                                                                        <a onclick="myFunction()"--}}
{{--                                                                                                           target="_blank"--}}
{{--                                                                                                           class="video">--}}
{{--                                                                                                            <i class="icon-play"></i>{{$lesson->title}}--}}
{{--                                                                                                        </a>--}}
{{--                                                                                                    @endif--}}
{{--                                                                                                    @if($lesson->preview==true )--}}
                                                                                                        <a href="{{\MehrLock::lessonUrl($lesson)}}"
                                                                                                           target="_blank"
                                                                                                           class="video" ta-toggle="tooltip"
                                                                                                           data-placement="right"
                                                                                                        >
                                                                                                            <i class="icon-play"></i>{{$lesson->title}}
                                                                                                        </a>
{{--                                                                                                    @endif--}}
{{--                                                                                                    @if($lesson->preview==true )--}}
{{--                                                                                                        <span--}}
{{--                                                                                                            style="float: left;">{{$lesson->duration_read}}</span>--}}
{{--                                                                                                    @endif--}}
{{--                                                                                                    @if($lesson->preview==false )--}}
{{--                                                                                                        <span style="float: left;"> <i class="icon-lock"--}}
{{--                                                                                                                                       title="برای مشاهده این ویدیو باید دوره را خریداری نمایید!"></i></span>--}}
{{--                                                                                                    @endif--}}
                                                                                                </li>

                                                                                            @endforeach


                                                                                        </ul>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach


                                                                </div>

                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif

                                        </div>

                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-fifth  column-margin-20px valign-top clearfix mobile-not-show">
                                    <div class="mcb-wrap-inner sticky-top sticky">
                                        <div class="image_wrapper" style="text-align: center;">
                                            <div class="get_in_touch course-sidebar">
                                                <div class="get_in_touch_wrapper">
                                                    <div class="icon_box icon_position_top has_border image_wrapper1"
                                                         style="padding:10px">
                                                        <div class="desc ">
                                                            <img
                                                                src="{{Storage::url($course->avatar)}}"
                                                                alt="{{$course->title}}"
                                                                class="img-fluid" style="margin-top: 2%;">

                                                        </div>
                                                        {{$course->title}}
                                                    </div>
                                                    <ul>

                                                        @if (isset($course->meta['discount']))
                                                            @if (is_numeric($course->meta['discount']))
                                                                <h3
{{--                                                                    style="background-color:#e6e1e17a;"--}}
                                                                >
                                                                    <del>          <span class="num" style="color: red">
                                {{number_format($course->meta['discount']/10)}}
                                                            </span></del>
                                                                    تومان
                                                                    @endif
                                                                    @endif
                                                                    <br>
                                                                    <span class="num" style="color: green">
                                {{number_format($course->price/10)}}
                                                            </span>تومان
                                                                </h3>
                                                                <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">
                                                                    <input type="button" value="ثبت نام" id="submit"
                                                                           class="btn-reg" style="width: 95%;">
                                                                </a>
                                                                <li class="phone">
                                                                    <p style="font-weight: bold">مشخصات دوره:</p>
                                                                </li>
                                                                @if (isset($course->meta['code']))
                                                                    <li class="right">
                                                                        <i class="icon-check"></i><span
                                                                            class="item-course"> کد دوره :
                                                                {{$course->meta['code']}}</span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['hour-time']))
                                                                    <li class="right"><i class=" icon-clock"></i><span
                                                                            class="item-course"> ساعت آموزشی :
                                                                {{$course->meta['hour-time']}}</span></li>
                                                                @endif
                                                                @if (isset($course->meta['certificate']))
                                                                    <li class="right"><i class="icon-vcard"></i><span
                                                                            class="item-course"> گواهینامه:
                                                                {{$course->meta['certificate']}}</span></li>
                                                                @endif
                                                                @if (isset($course->meta['time-course']))
                                                                    <li class="right"><i class="icon-clock"></i><span
                                                                            class="item-course">  طول دوره:
                                                                {{$course->meta['time-course']}}
                                                            </span>
                                                                    </li>
                                                                @endif
                                                                <span class="icon"></span>
                                                                @if($course->maximum_students!=0)
                                                                    <li class="right"><i class="icon-hourglass"></i>
                                                                        <span class="item-course">ظرفیت باقی مانده :
                                                            {!! $course->maximum_students !!}
                                                            </span>
                                                                    </li>
                                                                @endif
                                                                @if($course->enrolled_students!=0)
                                                                    <li class="right"><i class="icon-doc"></i>
                                                                        <span class="item-course">تعداد افراد دوره :
                                                                           {!! $course->enrolled_students !!}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['level']))
                                                                    <li class="right"><i class="icon-doc-text"></i>
                                                                        <span class="item-course"> سطح مهارت:
                                                                          {{$course->meta['level']}}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                                @if (isset($course->meta['sectioncount']))
                                                                    <li class="right"><i class=" icon-info"></i>
                                                                        <span class="item-course"> تعداد سر فصل ها:
                                                                         {{$course->meta['sectioncount']}}
                                                                         </span>
                                                                    </li>
                                                                @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <br>
                                @if($course->teachers->count()>0)
                                    <div class="wrap mcb-wrap one-fifth  column-margin-20px valign-top clearfix">
                                        <div class="mcb-wrap-inner">
                                            <div class="image_wrapper" style="text-align: center;">
                                                <div class="get_in_touch">
                                                    <div class="get_in_touch_wrapper">
                                                        <div
                                                            class="icon_box icon_position_top has_border image_wrapper1">
                                                            <div class="desc ">
                                                                مدرسان دوره
                                                            </div>

                                                        </div>
                                                        @foreach($course->teachers as $user)

                                                            <img src="{{($user->meta['avatar']??null) }}"
                                                                 class="user-avatar" alt="{{ $user->name }}">
                                                            <p style="text-align: center;margin: 1.3rem;">{{ $user->name }}</p>
                                                            @if (isset($user->meta['description1']))<span
                                                                class="item-course right">
                                                                   <i class=" icon-info"></i>
                                                                  {!! str_replace(',','<br/>',$user->meta['description1']??null)??null !!}
                                                            </span>
                                                            @endif
                                                            <br>
                                                            @if (isset($user->meta['description2']))<span
                                                                class="item-course right">
                                                                   <i class=" icon-info"></i>
                                                                  {!! str_replace(',','<br/>',$user->meta['description1']??null)??null !!}
                                                            </span>
                                                            @endif
                                                            <br>
                                                            @if (isset($user->meta['description3']))<span
                                                                class="item-course right">
                                                                   <i class=" icon-info"></i>
                                                                  {!! str_replace(',','<br/>',$user->meta['description1']??null)??null !!}
                                                            </span>
                                                            @endif
                                                            <br>
                                                            @if (isset($user->meta['description4']))<span
                                                                class="item-course right">
                                                                   <i class=" icon-info"></i>
                                                                  {!! str_replace(',','<br/>',$user->meta['description1']??null)??null !!}
                                                            </span>
                                                            @endif
                                                            <br>
                                                            @if (isset($user->meta['description5']))<span
                                                                class="item-course right">
                                                                   <i class=" icon-info"></i>
                                                                  {!! str_replace(',','<br/>',$user->meta['description1']??null)??null !!}
                                                            </span>
                                                            @endif
                                                            <br>

                                                            <br>
                                                        @endforeach

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
            </div>

        </div>

    </div>




    @if($course->commentable==true)
        <div class="widgets_wrapper" style="padding-top:0px; padding-bottom:1px; background-color:#ffffff">
            <div class="container">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_placeholder">
                        <br>
                        <div class="placeholder">
                            <div class="section section-post-about">
                                <div class="section_wrapper clearfix">
                                    <!-- One full width row-->
                                    <div class="column one author-box">
                                        <div class="author-box-wrapper">
                                            @if($course->comments->count()>0)
                                                <br>
                                                <div class="desc-wrapper">
                                                    <h3 id="comments">نظرات</h3>
                                                    <div class="desc"></div>
                                                </div>
                                                <div id="comments">
                                                    @foreach($course->comments as $comment)
                                                        <ul>
                                                            <div class="row"
                                                                 style="padding: -3px;margin: 21px;color: black;">
                                                                <li>
                                                                    <div class="avatar rev-thumb column one-third"
                                                                         style="width: 10%">
                                                                        <div class="avatar">
                                                                            <img
                                                                                src="{{$comment->creator? $comment->creator->avatar:Storage::url('theme/author.png')}}"
                                                                                alt="{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}"
                                                                                class="thumb">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="comment_right clearfix column two-third pad_right1"
                                                                        style="padding-top: 20px;">
                                                                        <div class="comment_right clearfix">
                                                                            <div class="comment_info">
                                                                                <a style="padding: 5px;"
                                                                                >{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}</a>

                                                                            </div>
                                                                            <p class="p-com"> {!!$comment->body !!}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            @endforeach
                                                        </ul>
                                                        <hr>
                                                        @endif
                                                </div>
                                                <br>
                                                <h3 class="h5comments">نظر خود را بیان کنید</h3>
                                                <div class="column one ">
                                                    @include('mehr4-theme-danesh::component.comment-creat',['parent'=>'post' ,'parent_id'=>$course->id])
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
        </div>
        @php($similarCourses=\Dpsoft\Mehr\Models\Course::published()->whereHas('categories',function ($q) use ($course)

                             {
                             $q->whereIn('categories.id',$course->categories->pluck('id')->toArray());
                             })->where('id','!=',$course->id)->get())
        @if($similarCourses->count()>0)


            <div class="section mcb-section sticky-stopper"
                 style="padding-top:0;padding-bottom:0;box-shadow: 0 0 14px -6px;background: #fcf5f3; ">
                <h2 style="direction: rtl;text-align: center;margin-bottom: 0;margin-top: 0;
    font-size: 25px;padding-top: 1rem;padding-bottom: 1rem;
">
                    دوره های مشابه
                </h2>
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one column-margin-20px clearfix align_center">
                    </div>
                    <div class="wrap mcb-wrap one clearfix">
                        <!-- One Full Row-->
                        <div class="column mcb-column one  ">
                            <div class="owl-carousel owl-theme">
                                @include('mehr4-theme-danesh::component.category-courses',['courses'=>$similarCourses])
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        @endif
@endsection
