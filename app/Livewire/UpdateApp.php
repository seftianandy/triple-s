<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateApp extends Component
{
    public $log = '';
    public $status = '';
    public $loading = false;

    public function mount()
    {
        $this->loadLog();
    }

    public function loadLog()
    {
        $logPath = storage_path('logs/update.log');
        $this->log = file_exists($logPath) ? file_get_contents($logPath) : 'Belum ada riwayat update.';
    }

    public function updateApp()
    {
        $this->loading = true;
        $this->status = '';

        $output = null;
        $returnVar = null;
        $time = now()->format('Y-m-d H:i:s');

        exec('cd ' . base_path() . ' && git pull 2>&1', $output, $returnVar);
        $outputText = implode("\n", $output);

        // Simpan log
        file_put_contents(storage_path('logs/update.log'), "[{$time}]\n{$outputText}\n\n", FILE_APPEND);

        // Refresh tampilan
        $this->loadLog();
        $this->status = '✅ Update berhasil dijalankan.';
        $this->loading = false;
    }

    public function render()
    {
        return view('livewire.content.setting.update-app-page');
    }
}
