<h2 style="text-align: center;">برترین اساتید کشور در دانش پژوهان</h2>
<div class="item section mcb-section mcb-section-7a91609f0 equal-height-wrap">
    <div id="teacher-carousel" class="owl-carousel owl-theme owl-drag owl-lazy">
        @foreach(\App\User::withAnyTags(['برتر','استاد'])->get() as $teacher)
            <div class="section_wrapper mcb-section-inner ">
                <div class="wrap mcb-wrap mcb-wrap-bd1188a9e one-third  column-margin-0px valign-middle clearfix"
                     style="padding: 40px; background-color: #121d5e !important; height: 400px;">
                    <div class="mcb-wrap-inner" style="top: 50% !important;">
                        <div class="column mcb-column mcb-item-6892a9038 one column_image">
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid"
                                         src="{{isset($teacher['meta']['avatar']) ? Storage::url($teacher['meta']['avatar']) :'https://dpe.ac/storage-dpe-ac_mehrlms_ir/theme/user.png'}}"
                                         alt="{{$teacher->name}}"  width="215"
                                         height="147">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="wrap mcb-wrap mcb-wrap-0e0e82403 two-third box-shadow valign-middle clearfix"
                     style="padding: 40px 40px 10px; background-color: rgb(247, 249, 250); height: 400px;">
                    <div class="mcb-wrap-inner" style="top: 50% !important;">
                        <div class="column mcb-column mcb-item-027b4b5f5 one column_column column-margin-20px">
                            <div class="column_attr clearfix" style=""><h4>{{$teacher->name}}</h4>
                                <p>{!! $teacher['meta']['expertises']??null !!}</p></div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>



