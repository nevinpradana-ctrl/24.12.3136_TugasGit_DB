@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Partner</h1>
    
    <a href="{{ route('partners.create') }}" class="btn btn-primary mb-3">Tambah Partner</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Partner</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $p) {{-- Looping data dummy [cite: 35] --}}
            <tr>
                <td>{{ $p->name }}</td>
                <td><img src="{{ $p->logo_url }}" alt="Logo" width="100"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection