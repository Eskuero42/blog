@extends('estateagency.layout.plantilla')
@section ('title','Property Single')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.property-single.intro-single')
    @include('estateagency.pages.property-single.property-single')
@endsection