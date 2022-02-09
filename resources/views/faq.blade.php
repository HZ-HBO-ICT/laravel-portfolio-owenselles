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
