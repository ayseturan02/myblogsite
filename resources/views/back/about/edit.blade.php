@extends("back.layout.master")
@section("title","hakkında güncelle")
@section("content")

    <div class="col-md-7 col-md-push-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                @if(isset($about))
                    <form action="{{route("admin.hakkında.update")}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$about->id }}">
                        <div class="form-group">
                            hakkında/başlık
                            <input type="text" value="{{$about->title}}" name="title"  class="form-control" placeholder="baslık ">
                        </div>
                        hakkında/içerik
                        <div class="form-group">
                            <textarea type="string" value="{{$about->content}}" name="content"  class="form-control" placeholder="baslık "></textarea>
                        </div>
                        eğitim
                        <div class="form-group">
                            <input type="text" value="{{$about->education}}" name="education"  class="form-control" placeholder="baslık ">
                        </div>
                        instagram
                        <div class="form-group">
                            <input type="text" value="{{$about->instagram}}" name="instagram"  class="form-control" placeholder="baslık ">
                        </div>
                        twitter
                        <div class="form-group">
                            <input type="text" value="{{$about->twitter}}" name="twitter"  class="form-control" placeholder="baslık ">
                        </div>
                        githup
                        <div class="form-group">
                            <input type="text" value="{{$about->githup}}" name="githup"  class="form-control" placeholder="baslık ">
                        </div>
                        discord
                        <div class="form-group">
                            <input type="text" value="{{$about->discord}}" name="discord"  class="form-control" placeholder="baslık ">
                        </div>
                        gmail
                        <div class="form-group">
                            <input type="text" value="{{$about->gmail}}" name="gmail"  class="form-control" placeholder="baslık ">
                        </div>
                        adres
                        <div class="form-group">
                            <input type="text" value="{{$about->address}}" name="address"  class="form-control" placeholder="baslık ">
                        </div>
                        telefon
                        <div class="form-group">
                            <input type="text" value="{{$about->telephone}}" name="telephone"  class="form-control" placeholder="baslık ">
                        </div>
                        <div class="form-group">
                            <a href="{{route("admin.hakkında.index")}}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                <button type="submit" >güncelle</button>
                            </a>
                        </div>
                    </form>
                @else
                    sayılmaz
                @endif
            </div>

        </div>
    </div>
@endsection
