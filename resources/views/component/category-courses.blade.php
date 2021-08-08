@foreach($courses->where('status','published') as $course)
    <div class="item course-list-outer-div" id="item-container">
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
                    {!! \Illuminate\Support\Str::words(strip_tags($course->description),15) !!}
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
