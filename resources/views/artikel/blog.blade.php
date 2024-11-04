@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<!-- ##### Hero Area Start ##### -->
<!-- <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('img/bg') }}/header.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                
                <div class="hero-content text-center">
                    <h2>Paud Terpadu Tunas Edupal</h2>
                    <a href="#" class="btn clever-btn">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

     <!-- Header Start -->
     <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Our Blog</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Blog</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="text-center pb-2">
        <p class="section-title px-5"><span class="px-2">Latest Blog</span></p>
        <h1 class="mb-4">Latest Articles From Blog</h1>
    </div>

    @foreach($artikel as $art)
    <div class="container-fluid pt-5">
        <div class="container">

            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">

                        <img class="card-img-top mb-2" src="{{ asset('uploads/img/artikel/'.$art->thumbnail) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;" alt="">
                        <div class="card-body bg-light text-center p-4">
                        
                            <h4 class="">{{ $art->judul }}</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin: {{ $art->user->name }}</small>

                            </div>
                            <p>{!! Str::limit($art->deskripsi) !!}</p>
                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>

    <!-- <div class="col-md-12 mb-4">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
            </ul>
        </nav>
    </div> -->
@endforeach
    <!-- Blog End -->

@stop