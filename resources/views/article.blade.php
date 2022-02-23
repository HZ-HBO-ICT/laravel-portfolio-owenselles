@extends('layout')

@section('content')
    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row-blog">
            <div class="col col-lg-9">
                <h1 class="heading-big">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="medium">
        <div class="row gx-5 align-items-center">
            <div class="col col-md-9">
                <p class="text-big"> {{ $article->content }}</p>
            </div>
        </div>
    </div>
@endsection
