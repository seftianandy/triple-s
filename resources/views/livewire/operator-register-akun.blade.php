<div class="max-w-md mx-auto bg-gray-900 p-8 rounded-xl shadow-lg">
  <h2 class="text-3xl font-bold text-white mb-6 text-center">Register Akun</h2>
  
  <form wire:submit.prevent="register">
    <!-- Username -->
    <div class="mb-4">
      <label for="username" class="block text-white mb-1">Username</label>
      <input 
        id="username" 
        type="text" 
        wire:model.defer="username" 
        placeholder="Masukkan username"
        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500"
      >
      @error('username')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label for="email" class="block text-white mb-1">Email</label>
      <input 
        id="email" 
        type="email" 
        wire:model.defer="email" 
        placeholder="Masukkan email"
        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500"
      >
      @error('email')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <!-- Level -->
    <div class="mb-4">
      <label for="level" class="block text-white mb-1">Level</label>
      <select 
        id="level" 
        wire:model.defer="level" 
        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:border-indigo-500"
      >
        <option value="">Pilih Level</option>
        <option value="juri">Juri</option>
        <option value="dewan juri">Dewan Juri</option>
        <option value="timer">Timer</option>
      </select>
      @error('level')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <!-- Password -->
    <div class="mb-6">
      <label for="password" class="block text-white mb-1">Password</label>
      <input 
        id="password" 
        type="password" 
        wire:model.defer="password" 
        placeholder="Masukkan password"
        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500"
      >
      @error('password')
        <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <!-- Tombol Register -->
    <button 
      type="submit" 
      class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-colors"
    >
      Register
    </button>
  </form>
</div>
