@extends('layouts.app')
@section('title', 'Home')

@section('banner')

@section('content')
<section id="row-1" class="my-5">
    <div class="container">
        <div class="row text-light p-5">
            <div class="col-lg-6">
                <p class="display-5 fw-bolder">Mencari beberapa pengalaman positif di kota udang</p>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme my-lg-5 my-md-4 mt-lg-0 my-0 mt-3" id="list-row1">
                    <div class="item">
                        <img src="{{ asset('images/img1.jpg') }}">
                    </div>
                    <div class="item">
                        <div class="item">
                            <img src="{{ asset('images/img2.jpg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <img src="{{ asset('images/img3.jpg') }}">
                        </div>
                    </div>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit explicabo fugit pariatur ipsum magni illo odio quidem illum labore voluptatibus enim minus possimus vitae necessitatibus perferendis, aliquam quis dignissimos debitis.</p>
            </div>
        </div>
    </div>
</section>

<section id="row-2" class="my-5">
    <div class="container">
        <div class="row p-5">

            <div class="col-lg-6">
                <img src="{{ asset('images/img1.jpg') }}" alt="img1.jpg" class="w-100 shadow-lg mb-lg-0 mb-5">
            </div>

            <div class="col-lg-6">
                <h2 class="display-5 fw-bolder">Kunjungi Tempat Wisata Terbaik</h2>
                <p class="text-muted fw-lighter mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, hic!</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error necessitatibus animi voluptates, facere nobis rem, sequi laborum eaque, consequatur cum debitis voluptatem assumenda ut placeat asperiores earum nisi maiores.</p>
            </div>

        </div>
    </div>
</section>

<section id="row-3" class="my-5">
    <div class="container">
        <div class="row text-light p-5">

            <div class="text-center mb-5">
                <h1>Artikel populer</h1>
                <p class="fw-lighter">Lorem ipsum dolor sit amet</p>
            </div>

            <div class="col-lg-4">
                <div class="card mb-3">
                    <img src="{{ asset('images/img3.jpg') }}" class="card-img-top" alt="img3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-3 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <img src="{{ asset('images/img3.jpg') }}" class="card-img-top" alt="img3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-3 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <img src="{{ asset('images/img3.jpg') }}" class="card-img-top" alt="img3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-3 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="row-4" class="mt-5">
    <div class="container">
        <div class="row p-5">

            <div class="col-lg-6 order-lg-first order-last">
                <h2 class="display-5 fw-bolder">Tentang Cirebon</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla sed odit officia neque nam ratione repudiandae nobis, eveniet ullam ad labore. Placeat explicabo nostrum necessitatibus nobis perferendis voluptatum at quaerat, quasi tempore rem atque animi? Omnis ipsum suscipit nisi consequuntur excepturi quibusdam fugiat quasi rerum, voluptatum, perspiciatis accusamus debitis corporis?</p>
            </div>

            <div class="col-lg-6 order-lg-last order-first">
                <img src="{{ asset('images/img3.jpg') }}" alt="img3.jpg" class="w-100 shadow-lg mb-lg-0 mb-5">
            </div>

        </div>
    </div>
</section>

<section id="row-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-3">More Articles</h1>

            <div class="owl-carousel owl-theme my-5">
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('images/img1.jpg') }}">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" >Read More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('images/img2.jpg') }}">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" >Read More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('images/img3.jpg') }}">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" >Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endSection

@push('styles')
<style>
    #row-1 .row .col-lg-6:nth-child(1) p {
        text-align: left;
    }
    #row-1 .row .col-lg-6:nth-child(2) p {
        text-align: justify;
    }

    #row-1 #list-row1 img {
        height: 100px;
        object-fit: cover;
    }

    #row-2 {
        background-color: #f5f5f5;
    }
    #row-2 p {
        text-align: justify;
        color: #000;
    }
    #row-2 img {
        transform: translateY(0%);
    }

    #row-3 .card {
        background: rgb(26, 26, 26);
        border: none;
        transition: all ease 0.5s;
    }
    #row-3 .card:hover {
        transition: all ease 0.5s;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    #row-4 {
        background-color: #f5f5f5;
        color: #000;
    }
    #row-4 p {
        text-align: justify;
    }
    #row-4 img {
        transform: translateY(0%);
    }

    #row-5 {
        background-color: #d6d6d6;
    }
    #row-5 .owl-carousel .item img {
        height: 200px;
        object-fit: cover;
    }
    #row-5 .owl-carousel .item .card {
        border: none;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    #row-5 .owl-carousel .item .card a {
        color: #000;
    }

    @media (max-width: 576px) {}

    @media (min-width: 720px) {}

    @media (min-width: 992px) {
        #row-2 img {
            transform: translateY(-25%);
            border: none;
            object-fit: cover;
        }

        #row-4 img {
            transform: translateY(-25%);
            object-fit: cover;
        }
    }

    @media (min-width: 1200px) {}

    @media (min-width: 1400px) {}

</style>
@endpush

@push('scripts')
    <script>
        
        $('#list-row1').owlCarousel({
            lazyLoad: true,
            autoplay:true,
            loop:true,
            margin:20,
            nav:false,
            center:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        $('.owl-carousel').owlCarousel({
            lazyLoad: true,
            autoplay:true,
            loop:true,
            margin:20,
            nav:false,
            stagePadding: 50,
            center:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

    </script>
@endpush