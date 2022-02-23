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
        <table class="table ">
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
            @foreach($courses as $course)
                <tr>
                    @if(!$course->is_sub_course) )
                    <td>{{ $course->quartile }}</td>
                    @else
                        <td style="border-bottom:0"></td>
                    @endif
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->ec }}</td>
                    <td>{{ $course->assessment_type }}</td>
                    @foreach($grades as $grade)
                        @if($course->assessment_id === $grade->assessment_id) )
                        <td>{{ $grade->id }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
