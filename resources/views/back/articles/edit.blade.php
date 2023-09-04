@extends("back.layout.master")
@section("title", "makaleyi güncelle")
@section("content")

        <div class="col-md-7 col-md-push-1">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                    @if(isset($page))
                    <form action="{{route("admin.makaleler.update")}}" enctype="multipart/form-data" method="post">
                            @csrf
                        <input type="hidden" id="id" name="id" value="{{$page->id }}">
                        <div class="form-group">
                            <input type="text" value="{{$page->title}}" name="title"  class="form-control" placeholder="baslık ">
                        </div>
                        <div class="form-group">
                            <textarea  type="string"  name="content"  cols="30" rows="7" class="form-control" placeholder="Makale yaz">{{$page->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <a href="{{route("admin.makaleler.index")}}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                <button type="submit" >yazdır</button>
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
