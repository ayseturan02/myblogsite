@extends("front.master")
@section("content")
    <div id="colorlib-main">
        <section class="colorlib-about" data-section="about">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <div class="about-desc">
                                    <span class="heading-meta">Hakkımızda</span>
                                    <h2 class="colorlib-heading">Who Am I? </h2>
                                    @foreach($abouts as $about)
                                    <p><strong>{{$about->title}}</strong><p>{{$about->content}}</p></p>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                <div class="services color-2">
                                    <span class="icon2"><i class="icon-globe-outline"></i></span>
                                    <h3>Web Design</h3>
                                </div>
                            </div>
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                <div class="services color-3">
                                    <span class="icon2"><i class="icon-data"></i></span>
                                    <h3>Software</h3>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection





