@extends('layouts.main')
@section('content')
<div class="container">
  <h1 class="header">Tambah Siswa</h1>
  <form action="/home/{{ $readMahasiswa->id }}" method="POST">
    @method('put')
    @csrf
    <div class="kolom-form">
      <label for="noAbsen">Nomor Absen</label>
      <input type="text" name="no_absen" id="noAbsen" value="{{ $readMahasiswa->no_absen }}">
    </div>
    <div class="kolom-form">
      <label for="nama">Nama Siswa</label>
      <input type="text" name="nama" id="nama" value="{{ $readMahasiswa->nama }}">
    </div>
    <div class="kolom-form">
      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" id="kelas" value="{{ $readMahasiswa->kelas }}">
    </div>
    <div class="kolom-form">
      <label for="jk">Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jk">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($readMahasiswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
        <option value="P" @if($readMahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
      </select>
    </div>
    <div class="kolom-form">
      <label for="point">Point</label>
      <input type="text" name="point" id="point" value="{{ $readMahasiswa->point }}">
    </div>
    <div class="tombolBx">
      <input type="submit" name="submit" value="Tambah">
    </div>
  </form>
</div>
@endsection