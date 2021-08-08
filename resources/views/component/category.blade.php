@php($category=\Dpsoft\Mehr\Models\Category::where('title',$title)->with('courses')->first())
@if($category!=null)
    <a href="{{route('course-list',[$category->id,$category->title])}}"><span>
 {{$category->title}}

    </span><i class="menu-arrow icon-left-open"></i></a>
@endif
