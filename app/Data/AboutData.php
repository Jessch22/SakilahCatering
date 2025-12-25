<?php

namespace App\Data;

class AboutData
{
    public static function getData()
    {
        return [
            'content' => <<<EOT
                <p>
                    Sakilah Catering berdiri dengan satu keyakinan: setiap acara spesial layak dirayakan dengan istimewa tanpa harus memberatkan. Berawal dari dapur di Bekasi, layanan kini telah meluas hingga mencakup seluruh area Jakarta, Bogor, Depok, Tangerang, dan Bekasi (Jabodetabek).
                </p>

                <p>
                    Fokus utama Sakilah Catering adalah menyajikan keseimbangan antara rasa, estetika, dan harga. Kebutuhan klien akan <b>Catering</b> dan <b>Wedding Organizer</b> diterjemahkan melalui perencanaan matang dan eksekusi detail.
                </p>

                <p>
                    Tersedia berbagai opsi paket yang dapat disesuaikan dengan anggaran:
                </p>

                <ul class="about-us-list">
                    <li>
                        <b>Catering Service:</b> Menyajikan menu mulai dari <b>Rp28.000 per pax</b>, sudah termasuk set meja prasmanan, alat makan sesuai pax, dessert table, tim waiters, dan dekorasi catering.
                    </li>
                    <li>
                        <b>Wedding Organizer:</b> Paket All-in mulai dari <b>Rp60 Juta</b>, segala kebutuhan mulai dari venue, dekorasi, tata rias & busana, dokumentasi, hingga catering sudah tertangani dengan rapi.
                    </li>
                </ul>

                <p>
                    Dedikasi penuh diberikan pada setiap projek untuk memastikan acara berjalan lancar dan meninggalkan kesan mendalam bagi tuan rumah maupun para tamu undangan. <i>Percayakan momen berharga bersama Sakilah Catering.</i>
                </p>
                EOT,

            'image' => 'IMG-20250927-WA00741.jpg',

            // FITUR WHY CHOOSE US
            'features' => [
                [
                    'icon'  => 'fa-solid fa-utensils',
                    'title' => 'Halal & Higienis',
                    'desc'  => 'Prioritas utama pada kebersihan dapur serta penggunaan bahan baku yang 100% halal.'
                ],
                [
                    'icon'  => 'fa-solid fa-hand-holding-heart',
                    'title' => 'Pelayanan Prima',
                    'desc'  => 'Tim berpengalaman yang siap melayani kebutuhan acara dari awal hingga akhir.'
                ],
                [
                    'icon'  => 'fa-solid fa-map-location-dot',
                    'title' => 'Jangkauan Luas',
                    'desc'  => 'Siap melayani acara di seluruh wilayah Jabodetabek.'
                ],
            ],

            // TAGS LAYANAN
            'services' => [
                'Wedding / Pernikahan', 'Khitanan', 'Ulang Tahun', 
                'Seminar', 'Arisan', 'Rapat Kantor', 
                'Pengajian', 'Jasa Waiters', 'Jasa WO'
            ],

            // LIST AREA
            'areas' => [
                'Jakarta Timur', 'Jakarta Selatan', 'Jakarta Pusat', 
                'Jakarta Barat', 'Jakarta Utara', 'Kota Bekasi', 
                'Kab. Bekasi', 'Depok', 'Bogor', 'Tangerang'
            ]
        ];
    }
}