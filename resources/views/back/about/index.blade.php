@extends("back.layout.master")
@section("title","tüm makaleler")
@section("content")

    <a href="#" class="btn btn-warning btn-circle">
        <i class="fas fa-exclamation-triangle"></i>
    </a> GÜNCELLE <br>
    <a href="#" class="btn btn-danger btn-circle">
        <i class="fas fa-trash"></i>
    </a>   SİL <br> <br>
    <br>

    @foreach($abouts as $about)

        &nbsp;&nbsp;&nbsp; <strong><b>HAKKINDA&nbsp;&nbsp;</b></strong>
        <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
            <i class="fas fa-exclamation-triangle"></i>
        </a>
        <a  href="{{route("admin.hakkında.destroy",$about->id )}}" class="btn btn-danger btn-circle">
            <i class="fas fa-trash"></i>
        </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                    {{$about->title}}//{{$about->content}}
                </div>
            </div>
        </div>

            &nbsp;&nbsp;&nbsp; <strong><b>EĞİTİM &nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a  href="{{route("admin.hakkında.destroy",$about->id )}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
                <div class="card mb-4 py-3 border-bottom-primary">
                    <div class="card-body">
                        {{$about->education}}
                    </div>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp; <strong><b>İNSTAGRAM</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a  href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-success">
                <div class="card-body">
                    {{$about->instagram}}
                </div>
            </div>
        </div>
            &nbsp;&nbsp;&nbsp; <strong><b>TWİTTER&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a  href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-info">
                <div class="card-body">
                    {{$about->twitter}}
                </div>
            </div>
        </div>
             &nbsp;&nbsp;&nbsp; <strong><b>GİTHUP&nbsp;&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a  href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-warning">
                <div class="card-body">
                    {{$about->githup}}
                </div>
            </div>
        </div>
            &nbsp;&nbsp;&nbsp; <strong><b>DİSCORD&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a   href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-danger">
                <div class="card-body">
                    {{$about->discord}}
                </div>
            </div>
        </div>
            &nbsp;&nbsp;&nbsp; <strong><b>GMAİL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a  href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-dark">
                <div class="card-body">
                    {{$about->gmail}}
                </div>
            </div>
        </div>
            &nbsp;&nbsp;&nbsp; <strong><b>ADRES&nbsp;&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
             <a href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-dark">
                <div class="card-body">
                    {{$about->address}}
                </div>
            </div>
        </div>
            &nbsp;&nbsp;&nbsp; <strong><b>TELEFON&nbsp;&nbsp;&nbsp;</b></strong>
            <a href="{{route("admin.hakkında.edit",$about->id)}}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
            </a>
            <a href="{{route("admin.hakkında.destroy",$about->id)}}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
        <div class="col-lg-6">
            <div class="card mb-4 py-3 border-bottom-dark">
                <div class="card-body">
                    {{$about->telephone}}
                </div>
            </div>

        </div>

    @endforeach


@endsection
