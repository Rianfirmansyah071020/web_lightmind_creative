@extends('layouts.main')

@section('content')
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 mt-auto mb-5 text-center">
                    <small>IT Solution</small>
                    <h1 class="text-white mb-5">Lightmind Creative</h1>
                    <a class="btn custom-btn smoothscroll" href="#section_2">Lihat Selengkapnya</a>
                </div>
                <div class="col-lg-12 col-md-8 col-sm-8 mt-auto d-flex flex-lg-row text-center iconn">
                    <div class="location-wrap mx-auto py-3 py-lg-0 ms-5">
                        <h5 class="text-white text-nowrap">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            Padang, Sumatera Barat
                        </h5>
                    </div>
                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3 d-none d-sm-block">Share:</span>
                            <li class="social-icon-item ">
                                <a href="https://wa.me/6285364060618" class="social-icon-link ">
                                    <span class="bi-whatsapp pt-2"></span>
                                </a>
                            </li>
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram pt-2"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('assets/video/vid.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>

    <div class="section-jasa container card mb-2">
        <div class="row d-flex justify-content-center row-card-jasa">
            <div
                class="col-lg-3 col-md-3 col-sm-3 col-3 card card-jasa d-flex justify-content-center align-items-center p-3">
                <img src="{{ asset('assets/icons/web.png') }}" alt="website" class="img-jasa">
                <p>Website</p>
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-3 col-3 card card-jasa d-flex justify-content-center align-items-center p-3 ">
                <img src="{{ asset('assets/icons/mobile.png') }}" alt="mobile" class="img-jasa">
                <p>Mobile</p>
            </div>
            <div
                class="col-lg-3 col-md-3 col-sm-3 col-3 card card-jasa d-flex justify-content-center align-items-center p-3 ">
                <img src="{{ asset('assets/icons/skripsi.png') }}" alt="skripsi" class="img-jasa">
                <p>Skripsi</p>
            </div>
        </div>
    </div>
@endsection
