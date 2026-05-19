@extends('layouts.admin')
@section('title', 'Tambah Partner Baru - Admin')
@section('page_title', 'Tambah Partner Baru')
@section('page_subtitle', 'Tambahkan partner baru untuk mendukung event Anda.')

@section('content')
<div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm max-w-3xl">
    <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Partner</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" required>
            @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Logo URL</label>
            <input type="url" name="logo_url" value="{{ old('logo_url', 'https://placehold.co/200x200') }}" class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" required>
            <p class="text-slate-400 text-xs mt-2">Masukkan URL gambar logo eksternal, contoh: https://placehold.co/200x200</p>
            @error('logo_url') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="pt-4 flex justify-between items-center border-t border-slate-100">
            <a href="{{ route('admin.partners.index') }}" class="px-6 py-3 text-slate-500 font-bold hover:text-slate-800 transition">Batal</a>
            <button type="submit" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">Simpan Partner</button>
        </div>
    </form>
</div>
@endsection
