@extends('estateagency.layout.plantilla')
@section ('title','Property Grid')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.property-grid.intro-single')
    @include('estateagency.pages.property-grid.property-grid')
@endsection