<div class="max-w-md mx-auto mt-10">
    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="upload" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
        <div class="mb-4">
            <label for="file" class="block text-gray-700 font-bold mb-2">
                Upload File Excel
            </label>
            <input type="file" id="file" wire:model="file"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
            @error('file')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Upload
            </button>
        </div>
    </form>
</div>
