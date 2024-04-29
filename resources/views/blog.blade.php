@extends('estateagency.layout.plantilla')
@section('title', 'Home')
@section('intro')
    @include('estateagency.home.intro')
@endsection
@section('content')
    @include('estateagency.home.secciones.services')
    @include('estateagency.home.secciones.agents')

   
@endsection
