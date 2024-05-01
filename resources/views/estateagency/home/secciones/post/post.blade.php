@foreach ($losblogs as $blog)
<div class="col-md-4">
    <div class="card-box-c foo">
        <div class="card-header-c d-flex">
            <div class="card-box-ico">
                <span class="bi bi-cart"></span>
            </div>
            <div class="card-title-c align-self-center">
                <h2 class="title-c">{{$blog->titulo}}</h2>
            </div>
        </div>
        <div class="card-body-c">
            <p class="content-c">
                {{substr($blog->contenido,0,100). '...'}}
               
            </p>
        </div>
        <div class="card-footer-c">
            <a href="{{route('blog.show',$blog->id)}}" class="link-c link-icon">Leer mas
                <span class="bi bi-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
@endforeach

