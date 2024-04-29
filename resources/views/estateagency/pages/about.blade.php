@extends('estateagency.layout.plantilla')
@section('title', 'Viendo About')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.about.introsingle')
    @include('estateagency.pages.about.miabout')
@endsection
