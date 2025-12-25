<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AboutData;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        //Ambil Data
        $data = AboutData::getData();

        $instagram = config('sakilah.instagram');
        $confIg = config('sakilah.instagram');
        $confTk = config('sakilah.tiktok');
        
        $socialLinks = [
            'instagram_embed' => "https://www.instagram.com/" . $confIg . "/?utm_source=ig_embed&utm_campaign=loading",
            'instagram_text'  => "Lihat Instagram Sakilah Catering",
            'tiktok_url'      => "https://www.tiktok.com/@" . $confTk,
            'tiktok_username' => $confTk,
            'tiktok_embed'    => "https://www.tiktok.com/@" . $confTk . "?refer=embed",
        ];

        return view('pages.about-us', [
            'about'       => $data,
            'htmlContent' => $data['content'],
            'maps_link'   => config('sakilah.maps_link'),
            'social'      => $socialLinks
        ]);
    }
}