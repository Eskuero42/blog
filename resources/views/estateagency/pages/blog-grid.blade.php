<!-- plantilla html -->
@extends('estateagency.layout.plantilla')
@section('title',"Blog Grid")

@section ('serch')
  @include('estateagency.pages.about.propertysearch')
  
@endsection 

@section('content')
  @include('estateagency.pages.blog-grid.intro-single')
  @include('estateagency.pages.blog-grid.blog-grid')
@endsection

