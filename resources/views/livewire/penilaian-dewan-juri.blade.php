<div class="bg-gray-200 p-6">
    <!-- Header Section -->
    <div class="flex justify-between items-start mb-8">
        <div>
            <p class="text-lg text-gray-800 font-medium">INDONESIA</p>
            <p class="text-xl text-red-600 font-bold">RONAL DINHO</p>
        </div>
        <div class="text-right">
            <p class="text-lg text-gray-800 font-medium">Arena A, Match 2, Juri 7</p>
            <p class="text-xl text-gray-800 font-bold">TUNGGAL/SINGLE</p>
        </div>
    </div>

    <!-- Main Scoring Interface -->
    <div class="border-2 border-gray-600 bg-white">
        <!-- Title Row -->
        <div class="bg-gray-100 border-b border-gray-600 p-3">
            <h2 class="text-center text-lg font-semibold text-gray-800">Tunggal Jurus 1 Tangan Kosong Movement 1</h2>
        </div>

        <!-- Score Header Row -->
        <div class="flex border-b border-gray-600">
            <div class="w-1/2 border-r border-gray-600 p-2 text-center">
                <span class="text-2xl font-bold text-red-600">0</span>
            </div>
            <div class="w-1/2 p-2 text-center">
                <span class="text-2xl font-bold text-blue-600">0</span>
            </div>
        </div>

        <!-- Action Buttons Row -->
        <div class="flex border-b border-gray-600" style="height: 250px;">
            <!-- Wrong Move Button -->
            <div class="flex-1 p-4 flex items-center justify-center">
                <button class="w-full h-full bg-red-500 hover:bg-red-600 text-white font-bold text-4xl rounded-lg transition-colors duration-200">
                    Wrong Move
                </button>
            </div>
            
            <!-- Center Text -->
            <div class="w-32 border-r border-l border-gray-600 flex items-center justify-center bg-gray-50">
                <p class="text-gray-600 text-center">Lorem ipsm</p>
            </div>
            
            <!-- Next Move Button -->
            <div class="flex-1 p-4 flex items-center justify-center">
                <button class="w-full h-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-4xl rounded-lg transition-colors duration-200">
                    Next Move
                </button>
            </div>
        </div>

        <!-- table bawah -->
        <table class="w-full border-collapse">        
            <tr>
                <td>
                    <div class="bg-gray-100 p-2">
                        <h3 class="text-center font-semibold text-gray-800">Accuracy Total Score</h3>
                    </div>
                </td>
                <td>
                    <div class="bg-gray-100 p-2 text-center">
                        <span class="text-blue-600 font-bold">0</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text-center text-sm text-gray-700 mb-3">Flow Movement / Stamina (Range Score : 0.01 - 0.10)</p>
                </td>
                <td>
                    <div class="p-2 text-center">
                        <span class="text-blue-600 font-bold"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex justify-center gap-1 mb-3">
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.01</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.02</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.03</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.04</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.05</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.06</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.07</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.08</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.09</button>
                        <button class="px-3 py-1 border border-gray-400 text-sm hover:bg-gray-100 transition-colors">0.10</button>
                    </div>
                </td>
                <td>
                    <div class="p-2 text-center">
                        <span class="text-blue-600 font-bold">0</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex-1 bg-gray-100 p-3">
                        <h3 class="text-center font-semibold text-gray-800">Total Score</h3>
                    </div>
                </td>
                <td>
                    <div class="p-2 text-center bg-gray-100">
                        <span class="text-blue-600 font-bold">0</span>
                    </div>
                </td>
            </tr>
        </table>

    </div>


    <script>
        // Add interactive functionality
        let wrongMoveCount = 0;
        let nextMoveCount = 0;
        
        // Get buttons and score displays
        const wrongMoveBtn = document.querySelector('.bg-red-500');
        const nextMoveBtn = document.querySelector('.bg-blue-600');
        const scoreDisplays = document.querySelectorAll('.text-2xl.font-bold');
        
        // Wrong Move button functionality
        wrongMoveBtn.addEventListener('click', function() {
            wrongMoveCount++;
            scoreDisplays[0].textContent = wrongMoveCount;
        });
        
        // Next Move button functionality
        nextMoveBtn.addEventListener('click', function() {
            nextMoveCount++;
            scoreDisplays[1].textContent = nextMoveCount;
        });
        
        // Accuracy score buttons
        const accuracyBtns = document.querySelectorAll('.px-3.py-1');
        accuracyBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                accuracyBtns.forEach(b => b.classList.remove('bg-blue-500', 'text-white'));
                // Add active class to clicked button
                this.classList.add('bg-blue-500', 'text-white');
            });
        });
        
        console.log('Pencak Silat Movement Scoring Interface loaded');
    </script>
</div>