@extends("back.layout.master")
@section("title","makale oluştur")
@section("content")

    <div class="col-md-7 col-md-push-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                <form action="{{route("admin.makaleler.store")}}"  enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title"  class="form-control" placeholder="baslık ">
                    </div>
                    <div class="form-group">
                        <textarea type="string" name="content"  cols="30" rows="7" class="form-control" placeholder="Makale yaz"></textarea>
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

            </div>

        </div>
    </div>
@endsection
