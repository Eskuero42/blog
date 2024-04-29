@extends('estateagency.layout.plantilla')
@section('title','Agents Grid')
    
@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.agents-grid.intro-single')
    @include('estateagency.pages.agents-grid.agents-grid')
@endsection