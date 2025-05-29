<?php

namespace App\Livewire;

use Livewire\Component;
// use Livewire\WithFileUploads;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Models\Atlit;

class HalamanOperator extends Component
{
    // masih error 
    // use WithFileUploads;
    // public $file;

    // public function upload()
    // {
    //     // Validasi file Excel (xlsx, xls, csv)
    //     $this->validate([
    //         'file' => 'required|file|mimes:xlsx,xls,csv',
    //     ]);

    //     // Mengubah file Excel menjadi array
    //     $data = Excel::toArray([], $this->file);

    //     // Pastikan ada data dan lebih dari header (baris pertama)
    //     if (isset($data[0]) && count($data[0]) > 1) {
    //         // Asumsikan baris pertama adalah header, maka proses mulai dari baris kedua
    //         foreach (array_slice($data[0], 2) as $row) {

    //             Pertandingan::create([
    //                 'arena'         => $row[1] ?? null,
    //                 'partai'        => $row[2] ?? null,
    //                 'kelas'         => $row[3] ?? null,
    //                 'kategori_babak'=> $row[4] ?? null,
    //                 'jenis_kelamin' => $row[5] ?? null,
    //                 'red_nama'      => $row[6] ?? null,
    //                 'red_kontingen' => $row[7] ?? null,
    //                 'blue_nama'     => $row[8] ?? null,
    //                 'blue_kontingen'=> $row[9] ?? null,
    //             ]);
    //         }
    //     }

    //     session()->flash('message', 'Data Excel berhasil di-upload!');
    // }
    
    public function render()
    {
        return view('livewire.halaman-operator');
    }
}
