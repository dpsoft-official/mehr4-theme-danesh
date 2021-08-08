    @php($category=\Dpsoft\Mehr\Models\Category::where('title',$title)->with('courses')->first())
            @if($category!=null)
                <li id="">
                    <a href="{{route('course-list',[$category->id,$category->title])}}"><span>
          {{$category->title}}
                        </span></a>
                </li>
                @endif




