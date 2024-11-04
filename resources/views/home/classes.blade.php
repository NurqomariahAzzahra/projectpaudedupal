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
            <h3 class="display-3 font-weight-bold text-white">Our Classes</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Classes</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- ##### Hero Area End ##### -->
    
   <!-- Class Start -->
   <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
                <h1 class="mb-4">Classes</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('img/icons') }}/class-2.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Grow Class</h4>
                            <p class="card-text">Deskripsi Kegiatan</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">0 - 3 Years</div>
                            </div>
                            <!-- <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div> -->
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">07:00 - 09:00</div>
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('img/icons') }}/class-1.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Creative Class</h4>
                            <p class="card-text">Deskripsi Kegiatan</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <!-- <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div> -->
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">07:00 - 09:30</div>
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('img/icons') }}/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Extracurricular</h4>
                            <p class="card-text">Deskripsi Kegiatan</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">0 - 6 Years</div>
                            </div>

                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->

@stop