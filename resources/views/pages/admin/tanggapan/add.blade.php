@extends('layouts.admin')

@section('title')
Tanggapan
@endsection

@section('content')
<div class="container">
  <h2>Tanggapan</h2>
  <form action="{{ route('tanggapan.store')}} " method="POST" enctype="multipart/form-data" class="form-grorp">
    @csrf
<ul class="list-group">
  <li class="list-group-item">
    <input type="hidden" name="pengaduan_id" value="{{ $item->id }} ">
    <label for="text">Tanggapan</label>
    <textarea class="form-control" placeholder="Isi Tanggapan Anda" value="{{ old('description')}}" name="tanggapan"></textarea></li>
  <li class="list-group-item">
    <label for="select">Status</label>
    <select class="form-control" name="status">
      <option value="Belum di Proses">Belum di Proses</option>
      <option value="Sedang di Proses">Sedang di Proses</option>
      <option value="Selesai">Selesai</option>
    </select>
  </li>
  <button type="submit" class="btn btn-success">
  Tanggapi
  </button>
</ul>
@endsection