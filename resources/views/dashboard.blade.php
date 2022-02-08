<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Hi, I'm Owen. Nice to meet you. I am a software enigneering student from the Netherlands.">
    <title>Owen Selles - Dashboard</title>
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
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    <!-- Delete this page for professional use after assignment -->
                    <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                    <!-- <a class="nav-link" href="/contact.html">Contact</a> -->
                    <!-- change to View work when dahsboard isnt needed anymore and use to showcase projects maybe just on downside of landing -->
                    <button class="btn btn-dark me-2" id="dashboard" style="color:lightgray;"
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
        <div class="row gx-5 align-items-center" id="dashboard-row-one">
            <div class="col col-lg-5">
                <h1 class="heading-big">My Study Monitor</h1>
                <p class="text-big">The purpose of this page is to maintain a clear overview of my study and
                    progress.</p>
            </div>
            <div class="col col-md-auto">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_w51pcehl.json"
                               background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="" aria-valuemin="0"
                 aria-valuemax="55">0%</div>
            <div class="progress-bar-marker" role="progressbar" style="width: 75%" aria-valuenow="75"
                 aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Quartile</th>
                <th scope="col">Course</th>
                <th scope="col">EC</th>
                <th scope="col">Exam</th>
                <th scope="col">Grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2.5</td>
                <td>Assesment</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written Exam</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case Study Exam</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="1">2</td>
                <td>Object Oriented Programming</td>
                <td>10</td>
                <td>Case Study &
                    Project</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="2">3</td>
                <td>Framework Project 1 </td>
                <td>5</td>
                <td>C2 Portofolio Exams</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Framework Development 1</td>
                <td>7.5</td>
                <td>Case Study</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="1">4</td>
                <td>Framework Project 2 </td>
                <td>10</td>
                <td>Portofolio Exam</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="2">-</td>
                <td>Personal Development</td>
                <td>12.5</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td>IT personality</td>
                <td>2.5</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <footer class="my-4">
            <!-- Delete later  -->
            <img src="{{ url('/img/hz.svg') }}" alt="hz">
            <p class="text-center text-muted" id="copyright">Copyright © 2021 Owen Selles. All rights reserved.</p>
        </footer>
    </div>

</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
