<div class="jumbotron p-5 text-light">
    <div class="content-banner text-center">
        <h1 class="display-4 shadow-lg">Cirebon Cuy</h1>
        <p class="lead shadow-lg">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
</div>

<style>

    .jumbotron {
        width: 100%;
        background: url({{ asset('images/img1.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50% 70%;
        height: 70vh;
    }
    .jumbotron .content-banner {
        margin-top: 50px;
    }

    @media (max-width: 576px) {}

    @media (min-width: 720px) {}

    @media (min-width: 992px) {
        .jumbotron .content-banner {
            margin-top: 130px;
        }
    }

    @media (min-width: 1200px) {}

    @media (min-width: 1400px) {}

</style>