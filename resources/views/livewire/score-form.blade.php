<div>
    <!-- Menampilkan pesan sukses atau error -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="updateScore">
        <div>
            <label for="team">Team Name</label>
            <input type="text" wire:model="team" id="team" class="form-input" />
            @error('team') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="score">Score</label>
            <input type="number" wire:model="score" id="score" class="form-input" />
            @error('score') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
