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
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection