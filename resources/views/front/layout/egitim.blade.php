

@extends("front.master")
@section("content")
    <div id="colorlib-main">
        <section class="colorlib-education" data-section="education">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Eğitim</span>
                        <h2 class="colorlib-heading animate-box">Eğitim</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($abouts as $about)
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{$about->education}}
                                            </a>
                                        </h4>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    @endforeach
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">ADIYAMAN MERKEZ ANADOLU LİSESİ /2019 MEZUN
                                                </a>
                                            </h4>
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

