@extends('layouts.app')

@section('title', 'Profil Kelas')

@section('content')
    <div class="p-5 bg-light rounded-3 border">
        <h1 class="display-6 fw-bold">Selamat Datang di profil kelompok</h1>
        <p class="fs-5 text-muted">Ini adalah website landing page untuk menampilkan profil kelompok, daftar anggota kelompok
            dan kontak kelompok.</p>
            <hr>
        <p>Kelompok 5</p>
        <p>Nama Kelas: XI RPL 1</p>
        <p>Nama Sekolah: SMKN 1 Garut </p>
        <p>Program Keahlian: Rekayasa Perangkat Lunak</p>
        <p>Deskripsi Kelas: Kelas 11 RPL 1 </p>
        <p>Visi Kelas: Menjadi kelas yang unggul dalam bidang Rekayasa Perangkat Lunak.</p>
        <a href="{{ route('class.kontak') }}" class="btn btn-primary">Lihat Kontak</a>
    </div>
@endsection
