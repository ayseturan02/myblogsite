
@extends("front.master")
@section("content")
    <div id="colorlib-main">


        <section class="colorlib-contact" data-section="contact">
            @foreach($abouts as $about)
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">e-posta / adres</span>
                        <h2 class="colorlib-heading">iletişim</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="colorlib-icon">
                                <i class="icon-globe-outline"></i>
                            </div>
                            <div class="colorlib-text">
                                <p><a href="#">{{$about->gmail}}</a></p>
                            </div>
                        </div>

                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="colorlib-icon">
                                <i class="icon-map"></i>
                            </div>
                            <div class="colorlib-text">
                                <p>{{$about->address}}</p>
                            </div>
                        </div>

                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="colorlib-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="colorlib-text">
                                <p><a href="tel://">{{$about->telephone}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-7 col-md-push-1">
                    <h1>Bana Buradan Ulaşabilirsiniz </h1>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                <form action="{{ route('mailyolla') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" name="email" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-send-message" value="Send Message">gönder</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection



