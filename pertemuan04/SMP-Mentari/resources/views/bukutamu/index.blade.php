@extends('layouts.app')

@section('title', 'Buku Tamu - SMP Mentari')

@section('content')
<div class="py-10 bg-gray-50/50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Halaman -->
        <div class="text-center mb-10">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Buku Tamu Digital</h1>
            <p class="text-gray-600 text-base mt-2 max-w-xl mx-auto">
                Silakan tinggalkan pesan, kesan, saran, atau masukan Anda untuk lingkungan sekolah SMP Mentari.
            </p>
        </div>

        @if(session('success'))
            <div class="max-w-3xl mx-auto mb-8 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r-xl shadow-sm flex items-center gap-3" role="alert">
                <span class="text-xl">✅</span>
                <div>
                    <span class="font-bold">Berhasil!</span> 
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Form Kirim Pesan (Kolom Kiri) -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 sticky top-6">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-lg">
                            ✍️
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Tinggalkan Pesan</h2>
                            <p class="text-xs text-gray-400">Isi formulir di bawah ini dengan lengkap</p>
                        </div>
                    </div>
                    
                    <form action="{{ route('bukutamu.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm shadow-sm py-3 px-4" placeholder="Contoh: Budi Santoso" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" name="email" class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm shadow-sm py-3 px-4" placeholder="nama@email.com" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan / Kesan</label>
                            <textarea name="pesan" rows="4" class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm shadow-sm p-4" placeholder="Tuliskan pesan atau kesan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl shadow-md transition duration-200 text-sm flex items-center justify-center gap-2">
                            <span>Kirim Pesan Sekarang</span>
                            <span>&rarr;</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Daftar Pesan Pengunjung (Kolom Kanan) -->
            <div class="lg:col-span-7 space-y-4">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-xl font-bold text-gray-800 border-l-4 border-blue-600 pl-3">Daftar Pesan Pengunjung</h2>
                    <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1 rounded-full">
                        {{ count($daftar_pesan) }} Pesan Masuk
                    </span>
                </div>
                
                @forelse($daftar_pesan as $pesan)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 transition hover:shadow-md">
                        <div class="flex justify-between items-start mb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center text-sm">
                                    {{ strtoupper(substr($pesan->nama, 0, 1)) }}
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-base">{{ $pesan->nama }}</h3>
                                    <p class="text-xs text-gray-400">{{ $pesan->email }}</p>
                                </div>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-50 border border-gray-100 px-3 py-1 rounded-full">
                                {{ $pesan->created_at ? $pesan->created_at->diffForHumans() : 'Baru saja' }}
                            </span>
                        </div>
                        
                        <div class="bg-gray-50/70 p-4 rounded-xl border border-gray-100/80 text-gray-700 text-sm leading-relaxed">
                            "{{ $pesan->pesan }}"
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-2xl border border-dashed border-gray-300 p-12 text-center shadow-sm">
                        <div class="w-16 h-16 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            💬
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Belum Ada Pesan</h3>
                        <p class="text-sm text-gray-500 max-w-sm mx-auto">
                            Belum ada pengunjung yang meninggalkan pesan. Jadilah orang pertama yang mengisi buku tamu ini!
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</div>
@endsection