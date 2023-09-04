@extends("front.master")
@section("content")
    <div id="colorlib-main">

        <section class="colorlib-skills" data-section="skills">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">My Specialty</span>
                        <h2 class="colorlib-heading animate-box">My Skills</h2>
                    </div>
                </div>
                @foreach($abilities as $ability)
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="progress-wrap">
                            <h3>{{$ability->title}}</h3>%{{$ability->content}}
                            <div class="progress" >
                                <div class="{{$ability->class}}" role="progressbar" aria-valuenow="{{$ability->content}}"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{{$ability->content}}%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection

