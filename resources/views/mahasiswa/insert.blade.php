@extends('layouts.main')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/insert.css') }}">
@endpush
@section('content')
<div class="container">
  <h1 class="header">Tambah Siswa</h1>
  <form action="/home/store" method="POST">
    @csrf
    <div class="kolom-form">
      <label for="noAbsen">Nomor Absen</label>
      <input type="text" name="no_absen" id="noAbsen">
    </div>
    <div class="kolom-form">
      <label for="nama">Nama Siswa</label>
      <input type="text" name="nama" id="nama">
    </div>
    <div class="kolom-form">
      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" id="kelas">
    </div>
    <div class="kolom-form">
      <label for="jk">Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jk">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
    <div class="kolom-form">
      <label for="point">Point</label>
      <input type="text" name="point" id="point">
    </div>
    <div class="tombolBx">
      <input type="submit" name="submit" value="Tambah">
    </div>
  </form>
</div>
@endsection