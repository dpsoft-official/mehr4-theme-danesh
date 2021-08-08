@php($category=\Dpsoft\Mehr\Models\Category::where('title',$title)->with('courses')->first())
@if($category!=null)
    <div class="column_attr clearfix" style="background-color:#f2f5f9;padding:30px 30px 15px;border-radius: 30px; text-align: center">
        <div
            class="image_frame image_item no_link scale-with-grid alignnone no_border">
            <div class="image_wrapper">
                <img class="scale-with-grid"
                     src="{{Storage::url($category->image)}}"
                     alt="{{$category->title}}"
                     title="{{$category->title}}"
                     width="400" height="345">
            </div>
        </div>
        <hr class="no_line" style="margin:0 auto 20px">
        <a href="{{$category->courses_url}}">
            <h4 class="categories-title">{{$category->title}}</h4>
        </a>
        <p> تعداد دوره ها:
            {{\Dpsoft\Mehr\Models\Course::whereHas('categories',function (Illuminate\Database\Eloquent\Builder $query) use($category){
       $query->where('categories.id',$category->id)->orWhere('categories.parent_id',$category->id);
 })->count()}}</p>
    </div>
@endif




