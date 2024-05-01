@extends('estateagency.layout.plantilla')
@section('title', 'Registrar')

@section('search')
    @include('estateagency.pages.about.propertysearch')
@endsection

@section('content')
    <!-- ======= Contact Single ======= -->
<section class="contact">
    <div class="container">
      <div class="row">
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
                <form action="{{ route('blog.update', $post-> id)}}" method="post"  class="php-email-form">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 mb-3">
                    </div>
                    <div class="col-md-6 mb-3">
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                        <input type="text" name="titulo" class="form-control form-control-lg form-control-a" value="{{$post->titulo}}" placeholder="Título del post" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <textarea  class="form-control" name="contenido" cols="45" rows="8" placeholder="Contenido del post" required>{{$post->contenido}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 my-3">
                        <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-a">Guardar cambios</button>
                    </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Single-->

@endsection