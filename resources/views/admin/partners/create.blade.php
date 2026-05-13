@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Partner Baru</h1>
    <form action="{{ route('partners.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Partner</label>
            <input type="text" name="name" class="form-control" required> {{-- Input name [cite: 39] --}}
        </div>
        <div class="mb-3">
            <label>URL Logo</label>
            <input type="text" name="logo_url" class="form-control" required> {{-- Input logo_url [cite: 39] --}}
        </div>
        <button type="submit" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">Simpan</button>
    </form>
</div>
@endsection