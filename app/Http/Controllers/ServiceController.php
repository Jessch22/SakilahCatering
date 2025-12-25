<?php

namespace App\Http\Controllers;

use App\Data\ServiceData;

class ServiceController extends Controller
{
    public function index()
    {
        // Ambil semua data services
        $services = ServiceData::getAll();
        
        // Ambil pengaturan global (link CTA)
        $settings = ServiceData::getSettings();

        return view('pages.service', [
            'services' => $services,
            'ctaLink' => $settings['cta_link'],
            'ctaText' => $settings['cta_text']
        ]);
    }
}