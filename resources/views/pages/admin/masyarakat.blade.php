@extends('layouts.admin')

@section('title')
Data Masyarakat
@endsection

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Masyarakat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIK</th>
              <th scope="col">No. Hp</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $masyarakat)
            <tr>
              <td>
                {{ $masyarakat->name }}
              </td>
              <td>
                {{ $masyarakat->nik }}
              </td>
              <td>
                {{ $masyarakat->phone }}
              </td>
              <td>
                {{ $masyarakat->email }}
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>

  </div>
</main>
@endsection