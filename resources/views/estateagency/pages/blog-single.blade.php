@extends('estateagency.layout.plantilla')
@section('tile', 'Blog Single')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.blog-single.intro-single')
    @include('estateagency.pages.blog-single.blog-single')
@endsection