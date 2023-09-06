@extends('layouts.masyarakat')

@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
    <h5 class="card-title">Masukkan Aduanmu</h5>
    <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data" class="form-group">
      @csrf
      <div class="form-group">
        <label></label>
          <textarea class="form-control" rows="8" type="text" placeholder="Isi laporan Anda" value="{{ old('description')}}" name="description"></textarea>
        <label>Gambar</label>
          <input class="form-control" type="file" value="{{ old('image')}}" name="image" /> <br>
        <button type="submit" class="btn btn-primary mb-2">Laporkan</button>
      </div>
    </form>
  </div>
<main class="h-full pb-16 overflow-y-auto">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif

</main>
@endsection