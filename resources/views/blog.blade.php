@extends('layout')

@section('content')
    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-lg-9">
                <h1 class="heading-big">The Blog</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="medium">
        <div class="row">
            @foreach($articles as $article)
                <div class="col col-md-4">
                    <div class="card">
                        <div class="card-header"><a id="copyright">{{ $article->created_at }}</a></div>
                        {{--                    <img src="${src}" class="card-img-top" alt="Cover image">--}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text"> {{ $article->excerpt }}</p>
                            <a href="/blog/{{ $article->id }}" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
