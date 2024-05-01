@extends('estateagency.layout.plantilla')
@section('title', $elpost->titulo)
@section('content')
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ $elpost->titulo }}</h1>
                        <span class="color-text-a">Datos Del Post</span>
                    </div>
                </div>
            </div>
            <div class="card-footer-c">
                <a href="{{route('blog.edit',$elpost->id)}}" class="link-c link-icon">Editar
                    <span class="bi bi-chevron-right"></span>
                </a>
            </div>
        </div>
    </section><!-- End Intro Single-->
    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box">
                        <img src="assets/img/slide-3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="card-footer-c">
                    <a href="{{route('delete',$elpost->id) }}" class="link-c link-icon">Eliminar
                        <span class="bi bi-chevron-right"></span>
                    </a>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <strong>Author: </strong>
                                <span class="color-text-a">Morgan Jimenez</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <strong>Category: </strong>
                                <span class="color-text-a">Travel</span>
                            </li>
                            <li class="list-inline-item">
                                <strong>Date: </strong>
                                <span class="color-text-a">19 Apr. 2017</span>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content color-text-a">
                        <p class="post-intro">
                            {{ $elpost->contenido }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Single-->
    
@endsection