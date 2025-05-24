<?php

namespace App\Livewire;

use Livewire\Component;

class PilihArena extends Component
{
    public $activeTab = 'Belum Mulai';

    public $matches = [
        ['partai' => '232', 'kelas' => 'Semi F', 'biru' => 'Doni', 'merah' => 'Rambo', 'status' => 'Belum Mulai'],
        ['partai' => '233', 'kelas' => 'Semi C', 'biru' => 'Seno', 'merah' => 'Ronald', 'status' => 'Masih Pertandingan'],
        ['partai' => '234', 'kelas' => 'Semi D', 'biru' => 'Marto', 'merah' => 'Zanto', 'status' => 'Telah Selesai'],
        ['partai' => '235', 'kelas' => 'Semi A', 'biru' => 'Doniqwe', 'merah' => 'Donaaa', 'status' => 'Belum Mulai'],
        ['partai' => '236', 'kelas' => 'Semi B', 'biru' => 'aaaaaaa', 'merah' => 'Ronoo', 'status' => 'Masih Pertandingan'],
        ['partai' => '237', 'kelas' => 'Semi E', 'biru' => 'Martiii', 'merah' => 'Zentoo', 'status' => 'Masih Pertandingan'],
    ];
    
    public function render()
    {
        return view('livewire.pilih-arena')->layout('layouts.app');
    }
}
