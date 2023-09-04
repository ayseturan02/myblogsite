@extends("back.layout.master")
@section("title","değeri değiş")
@section("content")

    <div class="col-md-7 col-md-push-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                @if(isset($ability))
                    <form action="{{route("admin.yetenekler.update")}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$ability->id }}">
                        <div class="form-group">
                            <input type="text" value="{{$ability->title}}" name="title"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <textarea  type="text"  name="content"  cols="30" rows="7" class="form-control" >{{$ability->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$ability->class}}" name="class"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <a href="{{route("admin.yetenekler.index")}}" class="btn btn-success btn-icon-split">
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
