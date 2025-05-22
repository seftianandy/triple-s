<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-6">
            <a href="{{ route('dashboard') }}" class="bg-white shadow rounded-xl p-4 flex items-center hover:bg-gray-50 transition">
                <x-heroicon-o-rectangle-group class="w-8 h-8 text-blue-600 mr-4" />
                <div>
                    <div class="text-lg font-semibold">Dasboard</div>
                    <div class="text-sm text-gray-500">Kembali ke halaman beranda</div>
                </div>
            </a>
            <a href="{{ route('update.show') }}" class="bg-white shadow rounded-xl p-4 flex items-center hover:bg-gray-50 transition">
                <x-heroicon-m-puzzle-piece class="w-8 h-8 text-blue-600 mr-4" />
                <div>
                    <div class="text-lg font-semibold">Update Aplikasi</div>
                    <div class="text-sm text-gray-500">Perbarui ke versi terbaru</div>
                </div>
            </a>
            {{-- Tambahkan menu lain di sini seperti Backup, Reset, dsb. --}}
        </div>
    </div>
</div>

