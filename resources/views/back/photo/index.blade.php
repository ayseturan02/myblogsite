@extends("back.layout.master")
@section("title", "fotoğraflar")
@section("content")

    <a href="{{route("admin.fotograflar.create")}}"> <button class="btn btn-primary "  type="submit">yeni fotoğraf ekle</button></a>
   <br> <br>

    <div class="col-md-7 col-md-push-1" id="photostable" >
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight" >
                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                </div>
                @foreach($photos as $photo)
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <td>
                            <img class="project"   src="{{asset("Foto/image/".$photo->photo)}}" width="200" > <br>
                        </td>
                            <div class="desc">
                            </div>
                    </div>

                </div>
                    <a href="{{route("admin.fotograflar.destroy", $photo->id )}}" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                        <span class="text">Sil</span>
                    </a>
                @endforeach

                <br>
            </div>

        </div>

    </div>

@endsection
