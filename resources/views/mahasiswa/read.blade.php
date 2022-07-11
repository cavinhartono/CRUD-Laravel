@extends('layouts.main')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/read.css') }}">
@endpush
@section('content')
<div class="container">
  <h1 class="header">Data Siswa SMK BPI Bandung</h1>
  <a href="/home/add" class="tambah">Tambah</a>
  <table>
    <thead>
      <th>Absen</th>
      <th>Jenis Kelamin</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Nilai</th>
      <th>Aksi</th>
    </thead>
    @foreach($readMahasiswa as $output)
    <tr>
      <td>{{ $output->no_absen   }}</td>
      <td>{{ $output->jenis_kelamin }}</td>
      <td>{{ $output->nama }}</td>
      <td>{{ $output->kelas }}</td>
      <td>{{ $output->point }}</td>
      <td>
        <a href="/home/{{ $output->id }}/edit" class="edit">Edit</a>
        <form action="/home/{{ $output->id }}" method="POST">
          @csrf
          @method('delete')
          <input type="submit" value="Hapus" class="delete">
        </form>
      </td>
    </tr>
    @endforeach
    <tbody>
    </tbody>
  </table>
</div>
@endsection