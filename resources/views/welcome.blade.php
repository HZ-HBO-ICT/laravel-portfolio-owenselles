<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Hi, I'm Owen. Nice to meet you. I am a software enigneering student from the Netherlands.">
    <title>Owen Selles - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-fluid ">
    <nav class="navbar navbar-expand-lg navbar-light animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="{{ url('') }}">Owen Selles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto" id="navbar-items">
                    <a class="nav-link" href="{{ url('about') }}">About me</a>
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    <!-- Delete this page for professional use after assignment -->
                    <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                    <!-- <a class="nav-link" href="/contact.html">Contact</a> -->
                    <!-- change to View work when dashboard isnt needed anymore and use to showcase projects -->
                    <button class="btn btn-dark me-2" id="dashboard"
                            onclick="window.location.href='{{ url('dashboard') }}';" type="button">Dashboard</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="socials">
        <a href="https://www.linkedin.com/in/owenselles/" target="_blank" class="linkedin-link w-inline-block"><img
                src="{{ url('/img/logo-linkedin.webp') }}" loading="lazy" width="24" alt="linkedin"
                class="social-icon"></a>
        <a href="https://github.com/owenselles" target="_blank" class="github-link w-inline-block"><img
                src="{{ url('/img/logo-github.webp') }}" loading="lazy" width="24" alt="github" class="social-icon"></a>
    </div>

    <div class="gradient-container">
        <img src="{{ url('/img/gradient.webp') }}" loading="eager" alt="gradient" width="auto" height="auto"
             class="gradient-animation">
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-lg-10">
                <h1 class="heading-big">A developer passionate about creating beautiful user friendly products</h1>
                <p class="text-gray">Studying HBO ICT at <a href="https://hz.nl/en/study-programmes/it"
                                                            style="color: black;" target="_blank" class="link">HZ University of Applied Sciences</a>.
                    Team lead at Albert
                    Heijn. Freelance software developer.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="text-one">
            <div class="col col-lg-5">
                <h1 class="heading-medium">About my study</h1>
                <p class="text-medium">As someone that's always interested in technologies and how things work, I
                    want to continue
                    learning more about programming and IT in general. In my prior education, I already did some
                    programming so HBO ICT is a logical choice for me to continue learning more.</p>
            </div>
            <div class="col col-md-auto">
                <div class="text-center">
                    <img src="{{ url('/img/ict.webp') }}" loading="lazy" alt="pic-of-ict" width="450" height="auto"
                         class="pic-rounded img-fluid pic-ict">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-3 justify-content-md-center" id="text-two">
            <div class="col col-md-auto">
                <button type="button" class="btn btn-outline-dark">HTML</button>
                <button type="button" class="btn btn-outline-dark">CSS</button>
                <button type="button" class="btn btn-outline-dark">Java</button>
                <button type="button" class="btn btn-outline-dark">Swift</button>
                <button type="button" class="btn btn-outline-dark">SwiftUI</button>
                <button type="button" class="btn btn-outline-dark">Kotlin</button>
                <button type="button" class="btn btn-outline-dark">Flutter</button>
                <button type="button" class="btn btn-outline-dark">Javascript</button>
                <button type="button" class="btn btn-outline-dark">Vue</button>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="my-4">
            <p class="text-center text-muted" id="copyright">Copyright © 2021 Owen Selles. All rights reserved.</p>
        </footer>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
