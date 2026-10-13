@extends('layouts.app')

@section('title', 'Selamat Datang di SMP Mentari')

@section('content')
<div class="py-10 bg-gray-50/50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Hero Section Banner -->
        <div class="relative bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-800 rounded-3xl shadow-xl overflow-hidden mb-12 p-8 sm:p-12 text-white">
            <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
            <div class="relative z-10 max-w-3xl">
                <span class="inline-block bg-white/20 backdrop-blur-md text-white text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full mb-4">
                    Official Website
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight mb-4">
                    Kegiatan & Berita Terbaru SMP Mentari
                </h1>
                <p class="text-blue-100 text-base sm:text-lg leading-relaxed mb-6">
                    Selamat datang di website resmi kami. Temukan berbagai informasi kegiatan, berita seputar akademik, serta momen inspiratif yang telah dilaksanakan di lingkungan sekolah.
                </p>
                <a href="{{ route('bukutamu.index') }}" class="inline-flex items-center bg-white text-blue-600 hover:bg-blue-50 font-semibold px-6 py-3 rounded-xl shadow-md transition duration-200 text-sm">
                    💬 Kunjungi Buku Tamu
                </a>
            </div>
        </div>

        <!-- Heading Section -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 border-b border-gray-200 pb-4 gap-2">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-blue-600 pl-3">Daftar Kegiatan</h2>
                <p class="text-sm text-gray-500 mt-1 pl-3">Dokumentasi dan publikasi kegiatan terbaru siswa & guru</p>
            </div>
        </div>

        <!-- Grid Cards Kegiatan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
            @forelse ($kegiatan_terbaru as $kegiatan)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col justify-between group">
                    <div class="p-6">
                        <!-- Header Card & Icon -->
                        <div class="flex justify-between items-center mb-4">
                            <span class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-lg group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                📌
                            </span>
                            <span class="text-xs font-medium text-gray-400 bg-gray-100 px-3 py-1 rounded-full">
                                {{ $kegiatan->created_at ? $kegiatan->created_at->format('d M Y') : 'Baru' }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $kegiatan->judul }}
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            {{ $kegiatan->deskripsi }}
                        </p>
                    </div>

                    <!-- Footer Card -->
                    <div class="bg-gray-50/80 px-6 py-3 border-t border-gray-100 text-xs text-gray-500 flex justify-between items-center">
                        <span class="flex items-center gap-1 text-gray-400">
                            ⏱️ {{ $kegiatan->created_at ? $kegiatan->created_at->diffForHumans() : 'Terbaru' }}
                        </span>
                        <span class="font-semibold text-blue-600 group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                            SMP Mentari &rarr;
                        </span>
                    </div>
                </div>
            @empty
                <!-- State Kosong / Empty State -->
                <div class="col-span-full">
                    <div class="bg-white rounded-2xl border border-dashed border-gray-300 p-12 text-center shadow-sm">
                        <div class="w-16 h-16 bg-amber-50 text-amber-500 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            📣
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Belum Ada Kegiatan</h3>
                        <p class="text-sm text-gray-500 max-w-md mx-auto">
                            Saat ini belum ada kegiatan yang dipublikasikan. Silakan kembali lagi nanti untuk melihat pembaruan terbaru.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination Links -->
        @if($kegiatan_terbaru->hasPages())
            <div class="mt-8 flex justify-center">
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 w-full max-w-md">
                    {{ $kegiatan_terbaru->links() }}
                </div>
            </div>
        @endif

    </div>
</div>
@endsection