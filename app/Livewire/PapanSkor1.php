<?php

namespace App\Livewire;

use Livewire\Component;

class PapanSkor1 extends Component
{
    public $scores = [9.90, 9.90, 9.90, 9.90, 9.90, 9.90, 9.90, 9.90, 9.90, 9.90];
    public $timer = "00:00";

    public function render()
    {
        return view('livewire.papan-skor1', [
        'indexedScores' => collect($this->scores)->map(fn($score, $index) => ['number' => $index + 1, 
        'score' => $score])
    ]);
    }
}
