@extends("back.layout.master")
@section("title","tüm makaleler")
@section("content")
    @foreach($pages as $page)
<br>
       <div class="card-">
           <div class="px-3 py-5 bg-gradient-dark text-white" ><p>{{$page->title}}\{{$page->content}}</p></div>
       </div>
       <a href="{{route("admin.makaleler.destroy", $page->id )}}" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
           <span class="text">Sil</span>
       </a>
       <a href="{{route("admin.makaleler.edit", $page->id )}}" class="btn btn-light btn-icon-split" >
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
           <span class="text">Güncelle</span>
       </a>
<br>

    @endforeach

    <br><br>
@endsection

