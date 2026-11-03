@extends('layouts.app')

@section('title', 'Dashboard - SMP Mentari')

@section('content')
<div class="py-10 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Welcome Banner -->
        <div class="bg-blue-600 rounded-2xl shadow-sm p-6 sm:p-8 text-white mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}! 👋</h1>
                <p class="text-blue-100 text-sm mt-1">
                    Ini adalah pusat kendali (dashboard) website SMP Mentari Ceria. Kelola kegiatan sekolah dan pesan buku tamu di sini.
                </p>
            </div>
            <div class="bg-blue-500/50 border border-blue-400/30 px-4 py-2 rounded-xl text-xs font-medium">
                Status: <span class="text-emerald-300 font-bold">● Aktif (Online)</span>
            </div>
        </div>

        <!-- Quick Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Card Kegiatan -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Kegiatan Sekolah</p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">12</h3>
                    <p class="text-xs text-emerald-600 mt-2 font-medium">↑ Terpublikasi di Halaman Home</p>
                </div>
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                    🏫
                </div>
            </div>

            <!-- Card Buku Tamu -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Pesan Buku Tamu</p>
                    <h3 class="text-3xl font-extrabold text-gray-800 mt-1">--</h3>
                    <p class="text-xs text-blue-600 mt-2 font-medium">Pesan masuk dari pengunjung</p>
                </div>
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                    💬
                </div>
            </div>
        </div>

        <!-- Management Sections / Quick Links -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8">
            <h2 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-100">Menu Pengelolaan Konten</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="{{ route('home') }}" class="group p-4 rounded-xl border border-gray-100 bg-gray-50/50 hover:bg-blue-50/50 hover:border-blue-200 transition flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-bold">📋</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm group-hover:text-blue-600">Kelola Kegiatan Sekolah</h4>
                            <p class="text-xs text-gray-500">Tambah, edit, atau hapus daftar kegiatan</p>
                        </div>
                    </div>
                    <span class="text-gray-400 group-hover:text-blue-600">&rarr;</span>
                </a>

                <a href="{{ route('bukutamu.index') }}" class="group p-4 rounded-xl border border-gray-100 bg-gray-50/50 hover:bg-blue-50/50 hover:border-blue-200 transition flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold">📖</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 text-sm group-hover:text-blue-600">Kelola Buku Tamu</h4>
                            <p class="text-xs text-gray-500">Lihat dan tinjau pesan masuk pengunjung</p>
                        </div>
                    </div>
                    <span class="text-gray-400 group-hover:text-blue-600">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection