<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Card 1 --}}
                <a href="#" class="relative block p-4 rounded text-white bg-sky-500 shadow-md hover:bg-sky-600 transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-3xl font-bold">15</p>
                            <p class="text-lg">
                                <strong>Data User</strong>
                            </p>
                        </div>
                        <div class="opacity-30">
                            <x-heroicon-m-user-group class="w-12 h-12" />
                        </div>
                    </div>
                    <div class="text-sm mt-2 text-white/80">
                        More info →
                    </div>
                </a>

                {{-- Card 2 --}}
                <a href="#" class="relative block p-4 rounded text-white bg-green-500 shadow-md hover:bg-green-600 transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-3xl font-bold">5</p>
                            <p class="text-lg">
                                <strong>Data Role User</strong>
                            </p>
                        </div>
                        <div class="opacity-30">
                            <x-heroicon-s-key class="w-12 h-12" />
                        </div>
                    </div>
                    <div class="text-sm mt-2 text-white/80">
                        More info →
                    </div>
                </a>

                {{-- Card 3 --}}
                <a href="{{ route('setting.index') }}" class="relative block p-4 rounded text-white bg-yellow-500 shadow-md hover:bg-yellow-600 transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-3xl font-bold">
                                Pengaturan
                            </p>
                            <p class="text-sm">
                                <strong>Versi digunakan 1.0.0</strong>
                            </p>
                        </div>
                        <div class="opacity-30">
                            <x-heroicon-s-wrench-screwdriver class="w-12 h-12" />
                        </div>
                    </div>
                    <div class="text-sm mt-2 text-white/80">
                        More info →
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
