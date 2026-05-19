@extends('layouts.admin')
@section('title', 'Kelola Partner - Admin')
@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Kelola daftar partner dan logo mereka di halaman admin.')

@section('content')
<div class="mb-8 flex flex-col md:flex-row justify-between gap-4 items-start md:items-end">
    <div>
        <form action="{{ route('admin.partners.index') }}" method="GET" class="flex gap-3">
            <input type="search" name="search" value="{{ old('search', $search) }}" placeholder="Cari partner..." class="px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition w-full md:w-80">
            <button type="submit" class="px-6 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">Cari</button>
        </form>
    </div>
    <a href="{{ route('admin.partners.create') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
        + Tambah Partner Baru
    </a>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16">No</th>
                    <th class="px-8 py-4">Logo</th>
                    <th class="px-8 py-4">Nama Partner</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                @forelse($partners as $index => $partner)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                    <td class="px-8 py-6">
                        <img src="{{ $partner->logo_url }}" alt="Logo {{ $partner->name }}" class="w-20 h-20 rounded-xl object-cover shadow-sm">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800">{{ $partner->name }}</p>
                        <p class="text-xs text-slate-400">{{ $partner->logo_url }}</p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.partners.edit', $partner->id) }}" class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">Edit</a>
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Hapus partner ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-8 py-10 text-center text-slate-500">Belum ada partner yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
