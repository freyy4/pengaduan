@extends('layouts.admin')

@section('title')
Detail Pengaduan
@endsection

@section('content')
@foreach($item->details as $ite)
<div class="container">
  <h2>Detail Aduan</h2>
<ul class="list-group">
  <li class="list-group-item">{{ $ite->name }}</li>
  <li class="list-group-item"> {{ $ite->user_nik }}</li>
  <li class="list-group-item">{{ $item->user->phone }}</li>
  <li class="list-group-item">{{ $ite->created_at->format('l, d F Y - H:i:s') }}</li>
  <li class="list-group-item">
    @if($item->status =='Belum di Proses')
    <span
          class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
          {{ $item->status }}
    </span>
    @elseif ($item->status =='Sedang di Proses')
    <span
          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
          {{ $item->status }}
    </span>
    @else
    <span
          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
          {{ $item->status }}
        </span>
    @endif
  </li>
  <li class="list-group-item">
    <img class=" h-32 w-35 " src="{{ asset('image/'.$item->image) }}" alt="" loading="lazy" />
  </li>
  <li class="list-group-item">              
    @if (empty($tangap->tanggapan))
    Belum ada tanggapan
    @else
    {{ $tangap->tanggapan}}
    @endif
  </li>
  @endforeach
</ul>
<a href="{{ url('admin/pengaduan/cetak', $item->id)}}"
  class="btn btn-success">
  Convert ke PDF
</a>
<a href="{{ route('tanggapan.show', $item->id)}}"
  class="btn btn-primary">
  Berikan Tanggapan
</a>
</div>
@endsection