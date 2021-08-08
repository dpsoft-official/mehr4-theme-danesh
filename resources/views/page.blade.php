@extends('mehr4-theme-danesh::layout-page')
@section('title')
    {{$page->title}}

@endsection
@section('content')
    {!!$page->edit_url_html!!}
    {!! $page->content !!}
{{--    {{$page->content}}--}}
@endsection

