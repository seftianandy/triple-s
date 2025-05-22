<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white shadow rounded-xl p-4 flex items-center hover:bg-gray-50 transition">
            <div>
                <div class="text-lg font-semibold">Update Aplikasi</div>
                <div class="text-sm text-gray-500 mt-2">
                    Versi aplikasi terbaru atau perbaikan bug akan diperbaharui. Untuk melakukan update aplikasi silahkan konfirmasi terlebih dahulu kepada developer. <br>
                    Tekan tombol di bawah untuk melakukan update aplikasi, dan setelah berhasil update silahkan untuk merefresh halaman.
                </div>
                @if ($status)
                    <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
                        {{ $status }}
                    </div>
                @endif
                <div class="mt-4">
                    <div wire:loading wire:target="updateApp" class="text-blue-600 animate-pulse">
                        ⏳ Sedang memproses update...
                    </div>
                </div>

                <div class="mt-4">
                    <button wire:click="updateApp" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700" @if($loading) disabled @endif>
                        🔄 Perbarui Sekarang
                    </button>
                </div>

                <div class="bg-black text-sm text-green-400 font-mono p-4 rounded overflow-auto h-96 whitespace-pre-wrap mt-4">
                    {{ $log }}
                </div>

                <div class="text-lg font-semibold mt-8">Riwayat Update Aplikasi</div>
                <div class="mt-2">
                    <h4># Update Versi 1.0</h4>
                    <small class="text-gray-500 mt-2">(12 Mei 2025)</small>
                    <div class="text-sm text-gray-500 mt-2">
                        - Halaman dashboard yang nantinya digunakan untuk user admin <br>
                        - Halaman Setting <br>
                        - Halaman Update Aplikasi <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
