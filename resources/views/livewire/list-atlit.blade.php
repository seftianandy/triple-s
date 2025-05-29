<div class="max-w-7xl mx-auto p-6 bg-gray-900 rounded-xl shadow-lg">
  <!-- Header dan Search Bar -->
  <div class="mb-6 flex flex-col md:flex-row items-center justify-between">
    <h1 class="text-3xl font-bold text-white mb-4 md:mb-0">
      List Peserta
    </h1>
    <div class="relative w-full md:w-64">
      <input
        type="text"
        placeholder="Cari peserta..."
        class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600"
      />
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
    </div>
  </div>

  <!-- Tabel List Peserta -->
  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-700">
      <thead class="bg-indigo-600">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-white">Nama</th>
          <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-white">Email</th>
          <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-white">Status</th>
        </tr>
      </thead>
      <tbody class="bg-gray-800 divide-y divide-gray-700">
        <!-- Contoh data peserta -->
        <tr class="hover:bg-gray-700 transition-colors">
          <td class="px-6 py-4 whitespace-nowrap text-white">John Doe</td>
          <td class="px-6 py-4 whitespace-nowrap text-white">john@example.com</td>
          <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-600 text-white">
              Aktif
            </span>
          </td>
        </tr>
        <tr class="hover:bg-gray-700 transition-colors">
          <td class="px-6 py-4 whitespace-nowrap text-white">Jane Smith</td>
          <td class="px-6 py-4 whitespace-nowrap text-white">jane@domain.com</td>
          <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-600 text-white">
              Nonaktif
            </span>
          </td>
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
      </tbody>
    </table>
  </div>

  <!-- Pagination (Opsional) -->
  <div class="mt-4 flex justify-end">
    <nav class="flex items-center space-x-2">
      <a href="#" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-white rounded">
        Prev
      </a>
      <a href="#" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-white rounded">1</a>
      <a href="#" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-white rounded">2</a>
      <a href="#" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-white rounded">3</a>
      <a href="#" class="px-3 py-1 bg-gray-700 hover:bg-gray-600 text-white rounded">
        Next
      </a>
    </nav>
  </div>
</div>
