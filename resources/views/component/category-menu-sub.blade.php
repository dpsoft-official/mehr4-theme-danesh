<ul class="sub-menu" id="submenu-level2" style="display: none;">
    @php($category=\Dpsoft\Mehr\Models\Category::where('title',$title)->with('courses')->first())
    @if($category!=null)
        @if($category->courses!=null)
            @foreach($category->courses as $course)
                @if($course->status=='published')
                    <li id="" style="width: 269px;">
                        <a href="{{$course->url}}"><span style="">
                    {{$course->title}}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        @endif
    @endif
</ul>

