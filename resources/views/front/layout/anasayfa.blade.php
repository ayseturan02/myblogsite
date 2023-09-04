@extends("front.master")
@section("content")
    <div id="colorlib-main">
    <section id="colorlib-hero" class="js-fullheight" data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset("front/images/a.jpg")}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
<br><br>
                                        <h1>Hi! <br>Ben Ayşe </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset("front/images/b.jpg")}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1>I am <br>a software engineer student.</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>

@endsection
