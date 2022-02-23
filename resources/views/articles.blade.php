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
        <a class="btn btn-outline-success" href="articles/create">Create new article</a>
        <div class="row">
            @foreach($articles as $article)
                <div class="col col-md-4">
                    <div class="card">
                        <div class="card-header"><a id="copyright">{{ $article->created_at }}</a></div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{!! $article->content !!}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary">Read
                                more</a>
                            <a href="article/{{ $article->id }}/edit-article" class="btn btn-outline-secondary">Edit or
                                delete article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
