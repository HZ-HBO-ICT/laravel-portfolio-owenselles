@extends('layout')

@section('content')
    <div class="gradient-container">
        <img src="{{ url('/img/gradient.webp') }}" loading="eager" alt="gradient" width="auto" height="auto"
             class="gradient-animation">
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-lg-10">
                <h1 class="heading-big">A developer passionate about creating beautiful user friendly products</h1>
                <p class="text-gray">Studying HBO ICT at <a href="https://hz.nl/en/study-programmes/it"
                                                            style="color: black;" target="_blank" class="link">HZ
                        University of Applied Sciences</a>.
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
                <button type="button" class="btn btn-outline-dark">PHP</button>
                <button type="button" class="btn btn-outline-dark">Javascript</button>
                <button type="button" class="btn btn-outline-dark">Vue</button>
            </div>
        </div>
    </div>
@endsection
