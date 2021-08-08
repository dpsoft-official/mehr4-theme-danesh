@extends("mehr4-theme-danesh::layout")
@section('class-body')
    color-custom style-simple layout-full-width mobile-tb-hide
    button-flat no-content-padding header-classic
    minimalist-header-no sticky-header sticky-white ab-hide
    subheader-both-center menu-line-below-80 menuo-right
    menuo-no-borders footer-sliding footer-copy-center nice-scroll
@endsection
<style>
    .footer1{
       height:24rem!important;
    }
    .footer2{
        height:24rem!important;    }
    .footer3{
        height:24rem!important;    }
</style>
@section('main')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section mcb-section-b2a472a43 bg-cover-ultrawide header-page" style="background-image: url('{{setting('headerpageimage')}}')" >
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap mcb-wrap-80efcb361 one valign-top clearfix" style="">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-15855acd8 three-fourth column_column">
                                            <div class="column_attr clearfix">
                                                {!!setting_edit('headerpageimage')!!}
                                                <h2 style="color: #fff;text-align: center;">@yield('title')</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:70px;text-align: justify;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  column-margin-20px valign-top clearfix rtl" style="padding:0 1%">
                                <div class="mcb-wrap-inner page-margin" >
                                    @yield('content')
                                    <div class="column mcb-column one column_column">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
