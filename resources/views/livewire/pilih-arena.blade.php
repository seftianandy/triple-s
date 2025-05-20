<div class="w-full max-w-screen-lg mx-auto bg-gray-900 p-4 shadow-lg">
    <h2 class="text-xl font-bold mb-4 text-center text-white">Pilih Arena</h2>

    <!-- Tabs -->
    <div class="flex justify-center space-x-4 mb-4">
        <button wire:click="$set('activeTab', 'Belum Mulai')" 
            class="px-4 py-2 text-lg font-bold rounded-lg shadow"
            :class="{'bg-green-500 text-white': activeTab === 'Belum Mulai', 'bg-gray-700 text-gray-300': activeTab !== 'Belum Mulai'}">
            Belum Mulai
        </button>
        <button wire:click="$set('activeTab', 'Masih Pertandingan')" 
            class="px-4 py-2 text-lg font-bold rounded-lg shadow"
            :class="{'bg-yellow-500 text-white': activeTab === 'Masih Pertandingan', 'bg-gray-700 text-gray-300': activeTab !== 'Masih Pertandingan'}">
            Masih Pertandingan
        </button>
        <button wire:click="$set('activeTab', 'Telah Selesai')" 
            class="px-4 py-2 text-lg font-bold rounded-lg shadow"
            :class="{'bg-red-500 text-white': activeTab === 'Telah Selesai', 'bg-gray-700 text-gray-300': activeTab !== 'Telah Selesai'}">
            Telah Selesai
        </button>
    </div>

    <!-- Table Structure -->
    <div class="bg-gray-800 p-4 rounded-lg shadow">
        <div class="grid grid-cols-5 text-center text-white font-bold pb-2 mb-2">
            <p>Partai</p>
            <p>Kelas</p>
            <p>Biru</p>
            <p>Merah</p>
            <p>Status</p>
        </div>

        @foreach($matches as $match)
        @if($match['status'] == $activeTab)
        <div class="grid grid-cols-5 text-center bg-gray-700 p-2 rounded-lg shadow text-white mb-2 p-4">
            <p>{{ $match['partai'] }}</p>
            <p>{{ $match['kelas'] }}</p>
            <p class="text-blue-400">{{ $match['biru'] }}</p>
            <p class="text-red-400">{{ $match['merah'] }}</p>
            <p class="text-{{ $activeTab === 'Belum Mulai' ? 'green' : ($activeTab === 'Masih Pertandingan' ? 'yellow' : 'red') }}-400">
                {{ $match['status'] }}
            </p>
        </div>
        @endif
        @endforeach
    </div>
</div>
