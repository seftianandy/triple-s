<div class="w-full max-w-screen-lg mx-auto bg-gray-900 p-6 shadow-2xl rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-center text-white tracking-wide">Pilih Arena</h2>

    <!-- Tabs -->
    <div class="flex justify-center space-x-4 mb-6">
        <button wire:click="$set('activeTab', 'Belum Mulai')" 
            class="px-5 py-3 text-lg font-bold text-white rounded-lg shadow-md transition-transform transform hover:scale-105"
            :class="activeTab === 'Belum Mulai' ? 'bg-green-500 hover:bg-green-600' : 'bg-gray-700 hover:bg-gray-600'">
            Belum Mulai
        </button>
        <button wire:click="$set('activeTab', 'Masih Pertandingan')" 
            class="px-5 py-3 text-lg font-bold text-white rounded-lg shadow-md transition-transform transform hover:scale-105"
            :class="activeTab === 'Masih Pertandingan' ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-gray-700 hover:bg-gray-600'">
            Masih Pertandingan
        </button>
        <button wire:click="$set('activeTab', 'Telah Selesai')" 
            class="px-5 py-3 text-lg font-bold text-white rounded-lg shadow-md transition-transform transform hover:scale-105"
            :class="activeTab === 'Telah Selesai' ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-700 hover:bg-gray-600'">
            Telah Selesai
        </button>
    </div>

    <!-- Table Structure -->
    <div class="bg-gray-800 p-5 rounded-lg shadow-lg">
        <div class="grid grid-cols-5 text-center text-white font-bold pb-3 mb-3 border-b border-gray-700">
            <p>Partai</p>
            <p>Kelas</p>
            <p>Biru</p>
            <p>Merah</p>
            <p>Status</p>
        </div>

        @foreach($matches as $match)
            @if($match['status'] == $activeTab)
                <div class="grid grid-cols-5 text-center bg-gray-700 p-3 rounded-lg shadow-md text-white mb-3 transition-transform transform hover:scale-105">
                    <p>{{ $match['partai'] }}</p>
                    <p>{{ $match['kelas'] }}</p>
                    <p class="text-blue-400 font-semibold">{{ $match['biru'] }}</p>
                    <p class="text-red-400 font-semibold">{{ $match['merah'] }}</p>
                    <p class="text-{{ $activeTab === 'Belum Mulai' ? 'green' : ($activeTab === 'Masih Pertandingan' ? 'yellow' : 'red') }}-400 font-bold">
                        {{ $match['status'] }}
                    </p>
                </div>
            @endif
        @endforeach
    </div>
</div>
