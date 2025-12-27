<?php

namespace App\Data;

class MenuData
{
    public static function getBuffetPackages()
    {
        // Data Global (Include items yang ada di bawah brosur)
        $includes = [
            'Meja Set dan Alat Prasmanan',
            'Alat Makan Sesuai Pack',
            'Team Waiters',
            'Dekorasi Catering'
        ];

        return [
            [
                'name' => 'MENU A',
                'price' => '28000',
                'min_order' => '300 Pack',
                'is_popular' => true,
                'items' => [
                    'Nasi Putih',
                    'Pilihan Sop',
                    'Pilihan Ayam',
                    'Menu Pelengkap',
                    'Kerupuk Udang',
                    'Air Mineral',
                    'Buah Potong'
                ],
                'includes' => $includes
            ],
            [
                'name' => 'MENU B',
                'price' => '31000',
                'min_order' => '300 Pack',
                'is_popular' => false,
                'items' => [
                    'Nasi Putih',
                    'Pilihan Sop',
                    'Pilihan Daging / Ikan',
                    'Menu Pelengkap',
                    'Kerupuk Udang',
                    'Air Mineral',
                    'Buah Potong'
                ],
                'includes' => $includes
            ],
            [
                'name' => 'MENU C',
                'price' => '34000',
                'min_order' => '300 Pack',
                'is_popular' => false,
                'items' => [
                    'Nasi Putih',
                    'Pilihan Sop',
                    'Pilihan Ayam',
                    'Pilihan Daging / Ikan',
                    'Menu Pelengkap',
                    'Kerupuk Udang',
                    'Air Mineral',
                    'Buah Potong'
                ],
                'includes' => $includes
            ],
            [
                'name' => 'MENU D',
                'price' => '38000',
                'min_order' => '300 Pack',
                'is_popular' => true,
                'items' => [
                    'Nasi Putih',
                    'Pilihan Sop',
                    'Pilihan Ayam',
                    'Olahan Daging / Ikan',
                    'Menu Pelengkap',
                    'Kerupuk Udang',
                    'Air Mineral',
                    'Buah Potong',
                    'Puding + Vla',
                    'Softdrink'
                ],
                'includes' => $includes
            ],
             [
                'name' => 'MENU LENGKAP',
                'price' => '47000',
                'min_order' => '300 Pack',
                'is_popular' => false,
                'items' => [
                    'Nasi Putih',
                    'Nasi Goreng',
                    'Pilihan Sop',
                    'Pilihan Ayam',
                    'Olahan Daging',
                    'Olahan Ikan',
                    'Menu Pelengkap',
                    'Kerupuk Udang',
                    'Air Mineral',
                    'Buah Potong',
                    'Puding + Vla',
                    'Mini Cake',
                    'Softdrink'
                ],
                'includes' => $includes
            ],
        ];
    }

    public static function getGubuganFavorites()
    {
        return [
            ['name' => 'Kambing Guling', 'price' => '2000000/Ekor'],
            ['name' => 'Zuppa Soup', 'price' => '18000/Porsi'],
            ['name' => 'Bakwan Malang', 'price' => '16000/Porsi'],
            ['name' => 'Siomay / Batagor', 'price' => '15000/Porsi'],
            ['name' => 'Sate Ayam + Lontong', 'price' => '15000/Porsi'],
            ['name' => 'Es Krim + Waffle', 'price' => '15000/Porsi'],
        ];
    }
}