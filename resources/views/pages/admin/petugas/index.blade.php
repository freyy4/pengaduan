@extends('layouts.admin')

@section('title')
Data Petugas
@endsection

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Petugas</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <a href="{{ route('petugas.create')}} "
        class="btn btn-success">
        + Tambah Petugas
      </a>
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
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $petugas)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-sm">
                {{ $petugas->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->nik }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->email }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->roles }}
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