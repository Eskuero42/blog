@extends('estateagency.layout.plantilla')
@section('title','Agent Single')

@section('serch')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.agent.intro-single')
    @include('estateagency.pages.agent.agent-single')
@endsection