@extends("back.layout.master")
@section("title", "fotoğraf ekle")
@section("content")



    <form action="{{ route('admin.fotograflar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="photo">Fotoğraf Seç:</label>
        <input type="file" name="photo" id="photo">
        <button type="submit">Yükle</button>
    </form>

@endsection
