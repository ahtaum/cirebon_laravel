@extends('layouts.app')
@section('title', 'Content')

@section('title-banner', 'Artikel-Content')
@section('content-banner', 'Beberapa artikel yang dapat Anda baca.')
@section('image-banner', asset('images/img1.jpg'))

@section('content')
<section id="row-1" class="my-5 container">
    <div class="row text-light p-lg-5 p-md-5 p-0">

        <div class="my-5">
            <p class="text-muted">Judith Herlambang</p>
            <h1 class="display-3 fw-bolder">aoidjoaisdjoaisdj</h1>
        </div>

        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur quae aspernatur dolorem. Aliquam excepturi deserunt officiis rerum quos voluptatibus sapiente culpa cumque? Itaque eligendi exercitationem sapiente, consequatur accusantium at soluta?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi asperiores totam perspiciatis expedita, ipsa sapiente? Dicta, labore accusantium. Sint, tenetur odit praesentium nihil unde, veritatis doloremque iusto repudiandae pariatur sed eos quam possimus eius molestiae suscipit hic atque natus accusamus ipsam nostrum consectetur facilis! Modi soluta consectetur iste vero at?</p>

            <img src="{{ asset('images/img2.jpg') }}" alt="img2.jpg" class="w-100 my-3 p-lg-5 p-md-5 p-0">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi asperiores totam perspiciatis expedita, ipsa sapiente? Dicta, labore accusantium. Sint, tenetur odit praesentium nihil unde, veritatis doloremque iusto repudiandae pariatur sed eos quam possimus eius molestiae suscipit hic atque natus accusamus ipsam nostrum consectetur facilis! Modi soluta consectetur iste vero at?</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At ullam molestiae facere odio aliquid sint id blanditiis dignissimos voluptate neque dolores exercitationem, aperiam repellendus incidunt nisi quaerat autem impedit quos beatae sapiente odit! Dolorum soluta libero officia perspiciatis sunt vero et esse veritatis molestiae eveniet? Dignissimos aliquid asperiores fugit voluptatibus quae suscipit, nesciunt maxime sunt nam doloribus expedita porro neque, rem accusamus perferendis sapiente laboriosam? Debitis distinctio minus reprehenderit est?</p>

            <p class="text-muted">Date xxx xxx xxx</p>
        </div>

    </div>
</section>

<section id="row-2" class="container mb-5">
    <div class="row text-light">

        <h2 class="my-5 display-5 text-center">Artikel Lain</h2>

        <div class="col-lg mb-3 mb-lg-0">
            <div class="card h-100">
                <img src="{{ asset('images/img1.jpg') }}" class="card-img-top h-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-lg mb-3 mb-lg-0">
            <div class="card h-100">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top h-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-lg mb-3 mb-lg-0">
            <div class="card h-100">
                <img src="{{ asset('images/img3.jpg') }}" class="card-img-top h-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endSection

@push('styles')
<style>

    #row-1 {
        background: #191919;
        transform: translateY(-10%);
        border-bottom: 1px solid #fff;
    }
    #row-1 p {
        text-align: justify;
    }

    #row-2 img {
        object-fit: cover;
    }
    #row-2 .card {
        background: #191919; 
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