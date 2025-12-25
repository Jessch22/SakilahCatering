<?php

namespace App\Data;

class ServiceData
{
    // Pengaturan Global (Link CTA)
    public static function getSettings()
    {
        $rawPhone = config('sakilah.whatsapp'); 
        
        if (substr($rawPhone, 0, 1) == '0') {
            $waNumber = '62' . substr($rawPhone, 1);
        } else {
            $waNumber = $rawPhone;
        }
        return [
            'cta_link' => "https://wa.me/{$waNumber}?text=Halo%20Sakilah%20Catering,%20saya%20mau%20tanya%20paketnya",
            'cta_text' => 'Pesan Sekarang'
        ];
    }

    // Data Layanan
    public static function getAll()
    {
        return [
            [
                'title' => 'PAKET CATERING ONLY',
                'price_highlight' => 'Start from 28K/pax.',
                'description' => 'Include Set meja prasmanan, peralatan makan sesuai pax, meja dessert, tim waiters, dan dekorasi catering.',
                'image' => 'IMG-20250927-WA0062.jpg', 
            ],
            [
                'title' => 'PAKET ALL-IN WEDDING',
                'price_highlight' => 'Start from 60Juta.',
                'description' => 'Include venue, catering, gubugan, dekorasi, WO & MC, Rias & Busana, Entertainment, dan Dokumentasi.',
                'image' => 'IMG-20250927-WA0088.jpg',
            ],
        ];
    }
}