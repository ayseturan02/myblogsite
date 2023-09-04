
@extends("front.master")
@section("content")
    <div id="colorlib-main">
        <section class="colorlib-blog" data-section="blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">FOTOĞRAFLARIM</span>
                        <h2 class="colorlib-heading animate-box">GALERİ</h2>
                    </div>
                </div>
                @foreach($photos as $photo)
                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft"></div>
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <img class="project"  name="photo"   id="string" src="{{ asset("Foto/image/".$photo->photo ) }}"  width="30" alt="{{$photo->id}}">
                            <div class="desc"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection



