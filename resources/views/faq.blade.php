<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Hi, I'm Owen. Nice to meet you. I am a software enigneering student from the Netherlands.">
    <title>Owen Selles - FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="{{ url('') }}">Owen Selles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto" id="navbar-items">
                    <a class="nav-link" href="{{ url('about') }}">About me</a>
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    <!-- Delete this page for professional use after assignment -->
                    <a class="nav-link active" href="{{ url('faq') }}">FAQ</a>
                    <!-- <a class="nav-link" href="/contact.html">Contact</a> -->
                    <!-- change to View work when dahsboard isnt needed anymore and use to showcase projects maybe just on downside of landing -->
                    <button class="btn btn-dark me-2" id="dashboard"
                            onclick="window.location.href='{{ url('dashboard') }}';" type="button">Dashboard</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="socials">
        <a href="https://www.linkedin.com/in/owenselles/" target="_blank" class="linkedin-link w-inline-block"><img
                src="{{ url('/img/logo-linkedin.webp') }}" loading="lazy" width="24" alt="linkedin"
                class="social-icon"></a>
        <a href="https://github.com/owenselles" target="_blank" class="github-link w-inline-block"><img
                src="{{ url('/img/logo-github.webp') }}" loading="lazy" width="24" alt="github" class="social-icon"></a>
    </div>

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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            Q: At HZ, how do you print a document from a laptop?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Go to the website
                                    <a href="http://print.hz.nl">print.hz.nl</a>
                                </li>
                                <li>Enter your HZ username and password and Login</li>
                                <li>
                                    Click on Choose File and select the file to print.
                                </li>
                                <li>
                                    Click on Next. Repeat the previous step if you want to add more
                                    documents.
                                </li>
                                <li>
                                    Wait until the document has been processed and then click on the
                                    Advanced option to state whether you want double-sided or black
                                    &amp; white printing.
                                </li>
                                <li>
                                    Select the HZ printer to print your document(s).
                                </li>
                            </ul>
                            Once the print job has been requested you must login using your HZ pass on the
                            RFID reader next to the printer. Next, select the printer option Print /
                            Afdrukken. In the menu, select the printer to where the job has been
                            sent. Next, you can see which printer job is ready to be printed. The print job is
                            completed provided there is sufficient credit on your printing account. When the
                            printing is completed, press Stop on the RFID reader, followed by Logout.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                            Q: At HZ, how do you scan a document and save it to your laptop?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Make sure you have at least €0.07 credit. Although scanning is
                                    free, you must have this amount of credit on your HZ pass.
                                </li>
                                <li>
                                    Register using your HZ pass on the RFID reader next to the printer.
                                </li>
                                <li>In the printer menu, select option Scan.</li>
                                <li>Lay the original sheet on the feeder or glass plate.</li>
                                <li>Press Scan and Send.</li>
                                <li>Press Scan to me.</li>
                                <li>Press Yes.</li>
                                <li>Press the Start button.</li>
                                <li>
                                    Press the green Start button on the printer to scan page by
                                    page. Once this is ready, press Start Sending.
                                </li>
                            </ul>
                            <p>
                                When scanning is completed, press Stop on the printer, followed by
                                Logout.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                            Q: What do you need to do when you are sick / show symptoms of coronavirus?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">A: Contact the teachers/helpdesk at school and stay home. Follow
                            the lessons on stream to compensate for that unusual sickness.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                            Q: How can you reserve space in one of the wings for a project?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Go to
                                    <a
                                        href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34">this
                                        link</a>
                                </li>
                                <li>
                                    Select the option type "meeting room" to see all meeting rooms
                                    that are available for reservation.
                                </li>
                                <li>Select a room</li>
                                <li>Fill in your details</li>
                                <li>Confirm reservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                            Q: How do I park my car in the HZ lot?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-start">
                            If you have a HZ student pass navigate with your car to the parking spot at the
                            following address: Poelendaelesingel, 4335 JA Middelburg. Here you can press your HZ
                            Students pass against the RFID reader and the pole will open up and you can park your
                            car.
                            <br><br>
                            <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen=""
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCBvVIELMtdd215sAiOwMFZU-khBIzgnso&#10;                      &amp;q=Poelendaelesingel,+4335+JA+Middelburg">
                            </iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="my-4">
            <p class="text-center text-muted" id="copyright">Copyright © 2021 Owen Selles. All rights reserved.</p>
        </footer>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
