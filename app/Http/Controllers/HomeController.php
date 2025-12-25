<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\HomeData;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil Data
        $data = HomeData::getData();

        // 2. Link Whatsapp
        $rawPhone = config('sakilah.whatsapp'); // Ambil dari config
        
        if (substr($rawPhone, 0, 1) == '0') {
            $waNumber = '62' . substr($rawPhone, 1);
        } else {
            $waNumber = $rawPhone;
        }

        $waLink = "https://wa.me/{$waNumber}";

        // 3. Kirim ke View
        return view('pages.home', [
            'hero' => $data['hero'],
            'about' => $data['about'],
            'portfolio' => $data['portfolio'],
            'services' => $data['services'],
            'testimonials' => $data['testimonials'],
            'achievements' => $data['achievements'],
            'waLink' => $waLink
        ]);
    }
}