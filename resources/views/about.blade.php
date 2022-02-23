@extends('layout')

@section('content')

    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-md-auto">
                <div class="text-center">
                    <img src="{{ url('/img/me.webp') }}" loading="lazy" alt="pic-of-me" width="400"
                         class="pic-rounded img-fluid">
                </div>
            </div>

            <div class="col col-md-5">
                <h1 class="heading-big">Hi there!</h1>
                <p class="text-big">Fuelled by a passion for technology, I have a deep desire to excel and
                    continuously improve in my work. Learn more about my journey below.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="text-one">
            <div class="col col-lg-5">
                <h1 class="heading-medium">About me</h1>
                <p class="text-medium">I'm Owen, a 20-year-old student from the Netherlands. When I am not studying
                    I spend my time working as a team lead at the biggest dutch supermarket called Albert Heijn. I'm
                    passionate about building software that improves the lives of those around me. I have some
                    experience in software development, mobile app creation,
                    front-end/back-end web, graphic design, and cloud management.
                </p>
            </div>
            <div class="col col-lg-5">
                <button type="button" class="btn btn-outline-dark">Hard-working</button>
                <button type="button" class="btn btn-outline-dark">Leader</button>
                <button type="button" class="btn btn-outline-dark">Creative</button>
                <button type="button" class="btn btn-outline-dark">Serious</button>
                <button type="button" class="btn btn-outline-dark">Helpful</button>
                <button type="button" class="btn btn-outline-dark">Curious</button>
                <button type="button" class="btn btn-outline-dark">Responsible</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="text-one">
            <div class="col col-lg-5">
                <button type="button" class="btn btn-outline-dark">HTML</button>
                <button type="button" class="btn btn-outline-dark">CSS</button>
                <button type="button" class="btn btn-outline-dark">Java</button>
                <button type="button" class="btn btn-outline-dark">Swift</button>
                <button type="button" class="btn btn-outline-dark">SwiftUI</button>
                <button type="button" class="btn btn-outline-dark">Kotlin</button>
                <button type="button" class="btn btn-outline-dark">Javascript</button>
                <button type="button" class="btn btn-outline-dark">Typescript</button>
                <button type="button" class="btn btn-outline-dark">Vue</button>
                <button type="button" class="btn btn-outline-dark">Scrum</button>
                <button type="button" class="btn btn-outline-dark">Firebase</button>
                <button type="button" class="btn btn-outline-dark">Google Cloud</button>
                <button type="button" class="btn btn-outline-dark">AWS IOT</button>
                <button type="button" class="btn btn-outline-dark">Arduino</button>
                <button type="button" class="btn btn-outline-dark">MySQL</button>
                <button type="button" class="btn btn-outline-dark">Bootstrap</button>
                <button type="button" class="btn btn-outline-dark">Tailwind</button>
            </div>
            <div class="col col-lg-5">
                <h1 class="heading-medium">My experience so far</h1>
                <p class="text-medium">Graduated as an MBO-4 Software developer, studying for my HBO ICT
                    Bachelor's degree at HZ University of Applied Sciences. Worked for a year as an intern for
                    Q-Aviation
                    working on their cloud backend, dashboards, and APIs. Was involved in creating an indoor mapping
                    application for Scalda and many more projects.
                </p>
            </div>
        </div>
    </div>
@endsection
