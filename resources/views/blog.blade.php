<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Hi, I'm Owen. Nice to meet you. I am a software enigneering student from the Netherlands.">
    <title>Owen Selles - Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
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
                    <a class="nav-link active" href="{{ url('blog') }}">Blog</a>
                    <!-- Delete this page for professional use after assignment -->
                    <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                    <!-- <a class="nav-link" href="/contact.html">Contact</a> -->
                    <!-- change to View work when dahsboard isnt needed anymore and use to showcase projects maybe just on downside of landing -->
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

    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-lg-9">
                <h1 class="heading-big">The Blog</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="medium">
        <div class="row" id="jsonContent">
        </div>
    </div>

    <div class="container">
        <footer class="my-4">
            <p class="text-center text-muted" id="copyright">Copyright © 2021 Owen Selles. All rights reserved.</p>
        </footer>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ url('/js/blog.js') }}"></script>
</body>

</html>
