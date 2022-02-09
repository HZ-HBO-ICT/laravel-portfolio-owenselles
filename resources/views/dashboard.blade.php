@extends('layout')

@section('content')
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
                 aria-valuemax="55">0%
            </div>
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
                    Project
                </td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="2">3</td>
                <td>Framework Project 1</td>
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
                <td>Framework Project 2</td>
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
@endsection
