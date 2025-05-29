<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Models\Monitoringair;

class Monitoringair_Controller extends Controller
{
    public function index()
    {
        // Ambil 20 data terbaru (dibalik agar urut naik)
        $data = Monitoringair::orderBy('recorded_at', 'desc')->take(20)->get()->reverse();

        // Cek data terbaru
        $latest = Monitoringair::orderBy('recorded_at', 'desc')->first();
        $now = Carbon::now();

        // Jika data terakhir lebih dari 5 menit lalu
        if ($latest && $now->diffInMinutes(Carbon::parse($latest->recorded_at)) > 5) {
            // Kirim peringatan hanya 1x tiap 10 menit
            if (!Cache::has('sensor_warning_sent')) {
                $this->sendTelegramAlert("⚠️ Sensor tidak mengirim data selama lebih dari 5 menit!");
                Cache::put('sensor_warning_sent', true, now()->addMinutes(10));
            }
        }

        return view('monitoring', compact('data'));
    }

    // Kirim pesan Telegram
    private function sendTelegramAlert($message)
    {
        $botToken = '7389862762:AAFZAcRxXfmvF2vSFppaZaW22u8957d9Bj4';
        $chatId = '6242769617';

        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
        Http::get($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }
}
