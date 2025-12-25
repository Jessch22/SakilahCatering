<?php

namespace App\Data;

class HomeData
{
    public static function getData()
    {
        return [
            'hero' => [
                'title' => 'Sakilah Catering',
                'slogan' => 'Wedding Organizer & Catering Service',
                'button_text' => 'Pesan Sekarang',
            ],

            // 2. TENTANG KAMI (HOME VERSION)
            'about' => [
                'image' => 'img/asset/IMG-20250927-WA0054.jpg',
                'button_text' => 'Selengkapnya',
                'button_url' => url('/about-us'),
                'content' => <<<EOT
                    <p>
                    Acara yang sukses berawal dari perencanaan matang dan cita rasa masakan yang tak terlupakan. <strong>Sakilah Catering</strong> hadir sebagai solusi lengkap kebutuhan Catering dan Wedding Organizer untuk seluruh wilayah <strong>Jabodetabek</strong>.
                    </p>
                    <p>
                    Komitmen utama kami adalah menghadirkan layanan berkualitas yang tetap terjangkau. Tersedia sajian prasmanan mulai dari <strong>Rp28.000,- per pax</strong> untuk berbagai acara, hingga paket <strong>All-In Package Wedding</strong> mulai dari <strong>Rp60 Juta</strong>.
                    </p>
                    <p>
                    Dengan dukungan tim berpengalaman dan dedikasi tinggi pada detail, segala kebutuhan acara akan tertangani dengan baik, sehingga momen bahagia dapat dinikmati sepenuhnya bersama para tamu undangan tanpa rasa khawatir.
                    </p>
                    EOT
            ],

            // 3. PORTOFOLIO
            'portfolio' => [
                'title' => 'Portofolio Catering',
                'images' => [
                    'img/asset/IMG-20250927-WA0055.jpg',
                    'img/asset/IMG-20250927-WA0094.jpg',
                    'img/asset/IMG-20250927-WA0090.jpg',
                ],
                'button_text' => 'Lihat Galeri Lainnya',
                'button_url' => url('/event')
            ],

            // 4. LAYANAN (SERVICES)
            'services' => [
                [
                    'title' => 'PAKET CATERING ONLY',
                    'desc' => 'Mulai dari Rp28.000/pax!',
                    'image' => 'img/asset/IMG-20250927-WA0062.jpg',
                    'button_text' => 'Tanya Selengkapnya'
                ],
                [
                    'title' => 'PAKET ALL-IN WEDDING',
                    'desc' => 'Mulai dari Rp60juta!',
                    'image' => 'img/asset/IMG-20250927-WA0088.jpg',
                    'button_text' => 'Tanya Selengkapnya'
                ],
            ],

            // 5. TESTIMONI (Link Instagram)
            'testimonials' => [
                'https://www.instagram.com/reel/DSRGrhZATRR/?utm_source=ig_embed&amp;utm_campaign=loading',
                'https://www.instagram.com/reel/DR32x8lgcTC/?utm_source=ig_embed&amp;utm_campaign=loading',
            ],

            // 6. ACHIEVEMENTS
            'achievements' => [
                ['number' => '2', 'desc' => 'Tahun Pengalaman'],
                ['number' => '100+', 'desc' => 'Acara Dilayani'],
                ['number' => '100%', 'desc' => 'Halal & Higienis'],
            ]
        ];
    }
}