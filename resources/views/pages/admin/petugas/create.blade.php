@extends('layouts.admin')

@section('title')
Data Petugas
@endsection

@section('content')
  <div class="container">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Input Data Petugas
    </h2>

    <form action="{{ route('petugas.store')}} " method="POST" enctype="multipart/form-data" class="form-gro+">
      @csrf

        <label class="block text-sm">Nomor Induk Kependudukan </label>
          <input class="form-control" type="text" placeholder="NIK" value="{{ old('nik')}}" name="nik">

        <label class="block mt-4 text-sm">Nama Lengkap</label>
          <input
            class="form-control"
            type="text" placeholder="John Doe" value="{{ old('name')}}" name="name">

        <label class="block mt-4 text-sm">Email</label>
          <input
            class="form-control"
            type="email" placeholder="email@email.com" value="{{ old('email')}}" name="email">

        <label class="block mt-4 text-sm">Nomor Telepon</label>
          <input
            class="form-control"
            type="text" placeholder="0123456789" value="{{ old('phone')}}" name="phone">

        <label class="block mt-4 text-sm">Role</label>
          <select class="form-control" name="roles">
            <option value="ADMIN">Admin</option>
            <option value="PETUGAS">Petugas</option>
          </select>
        <label class="block mt-4 text-sm">Password</label>
          <input
            class="form-control"
            type="password" placeholder="password" value="{{ old('password')}}" name="password">
        <label class="block mt-4 text-sm">Konfirmasi Password</label>
          <input
            class="form-control"
            type="password" placeholder="password" value="{{ old('password')}}" name="password_confirmation">
        <button type="submit"
          class="btn btn-success">
          Tambah Petugas
        </button>
      </div>
    </form>
  </div>
@endsection