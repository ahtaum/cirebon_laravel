@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section id="row-1" class="my-5">
    <div class="container text-light">

        <div class="row mt-lg-5 mt-0">
            <div class="col-lg-6 order-lg-first order-last">
                <div class="p-artikel mt-5">
                    <h2 class="display-5 fw-bolder">Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta officiis ea earum nihil maiores, voluptatem omnis, libero dolore qui explicabo ipsum et nisi quam sapiente optio iure officia laudantium tempora!</p>
                    <a href="#" >Read More</a>
                    <hr class="d-lg-none d-block">
                </div>
            </div>
            <div class="col-lg-6 order-lg-last order-first text-center">
                <img src="{{ asset('images/img1.jpg') }}">
            </div>
        </div>

        <div class="row mt-lg-5 mt-0">
            <div class="col-lg-6 order-lg-last order-last">
                <div class="p-artikel mt-5">
                    <h2 class="display-5 fw-bolder">Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta officiis ea earum nihil maiores, voluptatem omnis, libero dolore qui explicabo ipsum et nisi quam sapiente optio iure officia laudantium tempora!</p>
                    <a href="#" >Read More</a>
                    <hr class="d-lg-none d-block">
                </div>
            </div>
            <div class="col-lg-6 order-lg-first order-first text-center">
                <img src="{{ asset('images/img1.jpg') }}">
            </div>
        </div>

    </div>
</section>
@endSection

@push('styles')
<style>

    #row-1 .p-artikel {
        text-align: justify;
    }
    #row-1 img {
        width: 300px;
        height: 400px;
        object-fit: cover;
    }
    #row-1 a {
        color: #fff;
        font-size: 14px;
    }

    #row-1 hr {
        color: #fff;
    }

    @media (max-width: 576px) {}

    @media (min-width: 720px) {}

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {}

    @media (min-width: 1400px) {}

</style>
@endpush

@push('scripts')
    <script>
        
        

    </script>
@endpush