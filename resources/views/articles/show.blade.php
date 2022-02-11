@extends('layout')

@section('content')
    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row-blog">
            <div class="col col-lg-9">
                <h1 class="heading-big">{{ $article->title }}</h1>
                <h3 class="heading-small text-gray">{{ $article->excerpt }}</h3>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" id="medium">
        <div class="row gx-5 align-items-center">

                <div class="col col-md-4">
                    <p class="text-body"> {{ $article->body }}</p>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header"><a id="copyright">{{ $article->created_at }}</a></div>--}}
{{--                        --}}{{--                    <img src="${src}" class="card-img-top" alt="Cover image">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">{{ $article->title }}</h5>--}}
{{--                            <p class="card-text"> {{ $article->excerpt }}</p>--}}
{{--                            <a href="${item.link}" target="_blank" class="btn btn-outline-success">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

        </div>
    </div>
@endsection
