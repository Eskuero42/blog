@extends('estateagency.layout.plantilla')
@section('title', 'Contact')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    @include('estateagency.pages.contact.intro-single')
    @include('estateagency.pages.contact.contact-single')
@endsection