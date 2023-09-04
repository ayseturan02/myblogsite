@extends("front.master")
@section("content")
    <div id="colorlib-main">
        <section class="colorlib-makale" data-section="makale">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Makaleler</span>
                        <h2 class="colorlib-heading animate-box">makale</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                                .cards {
                                    display: flex;
                                    flex-direction: column;
                                    gap: 15px;
                                }

                                .cards .red {
                                    background-color: #f43f5e;
                                }

                                .cards .blue {
                                    background-color: #3b82f6;
                                }

                                .cards .green {
                                    background-color: #22c55e;
                                }

                                .cards .card {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    flex-direction: column;
                                    text-align: center;
                                    height: 100px;
                                    width: 800px;
                                    border-radius: 10px;
                                    color: white;
                                    cursor: pointer;
                                    transition: 400ms;
                                }

                                .cards .card p.tip {
                                    font-size: 1em;
                                    font-weight: 700;
                                }

                                .cards .card p.second-text {
                                    font-size: .7em;
                                }

                                .cards .card:hover {
                                    transform: scale(1.1, 1.1);
                                }

                                .cards:hover > .card:not(:hover) {
                                    filter: blur(10px);
                                    transform: scale(0.9, 0.9);
                                }
                            </style>
                        </head>
                        <body>
                        @foreach($pages as $page)
                        <div class="cards">
                            <div class="card red">
                                <h2 class="tip">{{$page->title}}</h2>
                                <h4 class="second-text">{{$page->content}}</h4>
                            </div>
                            <br>
                        </div>
                        @endforeach

                        </body>
                         </html>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

