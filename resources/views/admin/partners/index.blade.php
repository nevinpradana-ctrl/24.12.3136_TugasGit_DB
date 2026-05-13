@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{ route('partners.create') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">Tambah Partner</a>

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