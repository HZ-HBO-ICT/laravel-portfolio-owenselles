@extends('layout')

@section('content')
    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="col col-lg-9">
                <h1 class="heading-big">FAQ</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="POST" action="/faq">
            @csrf
            <div class="form-group">
                <label for="inputQuestion">Question</label>
                <input type="text" class="form-control @error('question') border-danger @enderror" name="question"
                       id="inputQuestion" placeholder="Question" value="{{ old('question') }}">
                @error('question')
                <p class="text-danger">This field is required</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="textAreaAnswer">Answer</label>
                <textarea class="form-control text-area @error('answer') border-danger @enderror" name="answer"
                          id="textAreaAnswer" placeholder="Answer"></textarea>
                @error('answer')
                <p class="text-danger">This field is required</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputLink">Link</label>
                <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link">
            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-4">Submit faq</button>
        </form>
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center" id="intro-row">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <ul>
                    @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $faq->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                 aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ $faq->answer }}</p>
                                    @if($faq->link)
                                        <a
                                            href="{{ $faq->link }}">the
                                            link</a>
                                        <a href="faq/{{ $faq->id }}/edit-faq" class="btn btn-secondary">Edit faq</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
