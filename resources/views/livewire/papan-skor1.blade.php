<div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex justify-center items-center mb-4">
            <p class="text-4xl font-bold bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">SENI</p>
   
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <img src="path/to/indonesia-flag.png" alt="Indonesia Flag" class="w-12 h-8 mr-4">
                    <div>
                        <h1 class="text-xl font-bold">INDONESIA</h1>
                        <p class="text-sm text-gray-600">BENNY G. SUMARSONO</p>
                    </div>
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-bold">FINAL</h2>
                    <p class="text-sm text-gray-600">TUNGGAL</p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-600">Timer</p>
                    <h2 class="text-2xl font-bold" id="timer">00:00</h2>
                </div>
            </div>
            <div class="grid grid-cols-10 gap-2 mt-[300px]">
                @foreach ($indexedScores as $score)
                    <div class="bg-blue-500 text-white text-center p-2 rounded-lg mb-2">{{ $score['number'] }}</div>
                @endforeach
            </div>
            <div class="grid grid-cols-10 gap-2">
                @foreach ($indexedScores as $score)
                    <div class="bg-blue-500 text-white text-center p-2 rounded-lg">{{ $score['score'] }}</div>
                @endforeach
            </div>
            <div class="text-center mt-4 text-gray-600 text-sm">
                <p>MADE BY CV. IT TECH PRODUCTION</p>
            </div>
        </div>
    </div>