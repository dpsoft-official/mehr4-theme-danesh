@extends("mehr4-theme-danesh::layout")

@section('class-body')
    color-custom style-simple layout-full-width mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center nice-scroll
    style-simple layout-full-width nice-scroll-on  button-flat
    no-content-padding
@endsection
@section('main')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section mcb-section-b2a472a43 bg-cover-ultrawide course-page"
                         style="background-image: url({{setting('coursepage')}})">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-80efcb361 one valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-15855acd8 three-fourth column_column">
                                        <div class="column_attr clearfix">

                                            <h2 style="color: #fff;text-align: center;">
                                                دوره های آموزشی{!!setting_edit('coursepage')!!}
                                                @if($selectedCategory)
                                                    <h2 style="color:white;" class="h2-title">
                                                        «{{$selectedCategory->title}}»
                                                    </h2>
                                                    @if($query)
                                                        <div>
                                                            <small>«{{$query}}»</small>
                                                        </div>
                                                    @endif
                                                @endif
                                            </h2>
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
    @if($selectedCategory And \Dpsoft\Mehr\Models\Category::where('parent_id',$selectedCategory->id)->exists())
        @foreach(\Dpsoft\Mehr\Models\Category::where('parent_id',$selectedCategory->id)->get() as $categoryChild)
            <div class="section mcb-section "
                 style="padding-top:20px;padding-bottom:20px;box-shadow: 0 0 14px -6px;background: #fcf5f3; ">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one column-margin-20px clearfix align_center">
                    </div>
                    @if($categoryChild->courses() !=null)
                        <div class="wrap mcb-wrap one clearfix">
                            <!-- One Full Row-->
                            <h2 id="header-course">
                                دسته بندی :
                                {{$categoryChild->title}}
                            </h2>
                            <div class="column mcb-column one  ">
                                <div class="owl-carousel owl-theme">
                                    @include('mehr4-theme-danesh::component.category-courses',['courses'=>$categoryChild->courses->where('status','published')])
                                    <div class="slider_pagination"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    @elseif($selectedCategory)
        <div class="section mcb-section "
             style="padding-top:20px;padding-bottom:20px;box-shadow: 0 0 14px -6px;background: #fcf5f3; ">
            <div class="section_wrapper mcb-section-inner">
                <div class="wrap mcb-wrap one column-margin-20px clearfix align_center">
                </div>

                <div class="wrap mcb-wrap one clearfix">
                    <!-- One Full Row-->
                    @if($courses->count()!=0)
                        <div class="section_wrapper mcb-section-inner ">
                            <div class="">
                                @foreach($courses->where('status','published') as $course)
                                    <div class="item course-list-outer-div wrap mcb-wrap one-fourth category-course" id="item-container" >
                                        <div class="item_wrapper">
                                            <div class="image_wrapper">
                                                <a href="{{$course->url}}">
                                                    <img width="375" height="210"
                                                         src="{{Storage::url($course->avatar)}}"
                                                         class="scale-with-grid wp-post-image course-item-img"
                                                         alt="{{$course->title}}"
                                                    />
                                                </a>
                                            </div>
                                            <div class="desc1">
                                                <h4 class="title-course"><a
                                                        href="{{$course->url}}">{{$course->title}}</a></h4>
                                                {!!$course->edit_url_html!!}
                                                <p class="course-text1">
                                                    {!! \Illuminate\Support\Str::words(strip_tags($course->description),10) !!}
                                                </p>
                                                @if (isset($course->meta['discount']))
                                                    @if (is_numeric($course->meta['discount']))

                                                        <div>
                                                            <del class="discount" style="color: red">
                                                                {{number_format($course->meta['discount']/10)}}
                                                                تومان
                                                            </del>

                                                        </div>
                                                    @endif
                                                @endif
                                                <a class="mfn-link mfn-link-4"
                                                   ontouchstart="this.classList.toggle('hover');"
                                                   data-hover="Phasellus">
                                                    <div data-hover="Phasellus"
                                                         @if (isset($course->meta['discount']) && is_numeric($course->meta['discount'])) style="color: green" @endif>
                                                        {{number_format($course->price/10)}} تومان
                                                    </div>
                                                </a>
                                                <br>
                                                <div class="course-inner-div">
                                                    <a href="{{$course->url}}" class="button button_left button_js">
                                                        <span class="button_label register-button">ثبت نام</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="slider_pagination"></div>
                            </div>
                        </div>
                    @else
                        <br>
                        <h2 style="text-align: right;">دوره ای یافت نشد</h2>
                        <br>
                    @endif

                </div>

            </div>
        </div>
    @elseif($query)
        <div class="section mcb-section "
             style="padding-top:20px;padding-bottom:20px;box-shadow: 0 0 14px -6px;background: #fcf5f3; ">
            <div class="section_wrapper mcb-section-inner">
                <div class="wrap mcb-wrap one column-margin-20px clearfix align_center">
                </div>
                <div class="wrap mcb-wrap one clearfix">
                    <h2 style="direction:rtl;text-align: center;margin-bottom: 3rem;margin-top: 3rem;">
                        نتایج جستجو برای
                        :«{{$query}}»
                    </h2>
                    <!-- One Full Row-->
                    @if($courses->count()!=0)
                        <div class="column mcb-column one  ">
                            <div class="owl-carousel owl-theme">
                                @include('mehr4-theme-danesh::component.category-courses',['courses'=>$courses])
                                <div class="slider_pagination"></div>
                            </div>
                        </div>
                    @else
                        <br>
                        <h2 style="text-align: right;">دوره ای یافت نشد</h2>
                        <br>
                    @endif

                </div>

            </div>
        </div>
    @else
{{--        @include('mehr4-theme-danesh::component.category-courses',['courses'=>$category->courses])--}}

    @php($allCategories=\Dpsoft\Mehr\Models\Category::whereHas('courses')->paginate(4))
    @foreach($allCategories as $category)
        <div class="section mcb-section "
             style="padding-top:20px;padding-bottom:20px;box-shadow: 0 0 14px -6px;background: #fcf5f3; ">
            <div class="section_wrapper mcb-section-inner">
                {{--                    <div class="wrap mcb-wrap one column-margin-20px clearfix align_center">--}}
                {{--                    </div>--}}
                @if($category->courses() !=null)
                    <div class="wrap mcb-wrap one clearfix">
                        <h2 id="header-course">
                            دسته بندی :
                            {{$category->title}}
                        </h2>
                        <div class="column mcb-column one  ">
                            <div class="owl-carousel owl-theme">
                                @include('mehr4-theme-danesh::component.category-courses',['courses'=>$category->courses])
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
    {{$allCategories->render('mehr4-theme-danesh::pagination.custom')}}
    @endif
@endsection
