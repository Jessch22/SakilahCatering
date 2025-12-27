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
        $dataRaw = AboutData::getData();
        $about = (object) $dataRaw;

        $finalImage = Str::startsWith($about->image, 'img/') 
                    ? asset($about->image) 
                    : asset('storage/' . $about->image);

        $maps_link = config('sakilah.maps_link');
        $instagram = config('sakilah.instagram');
        $confIg = config('sakilah.instagram');
        $confTk = config('sakilah.tiktok');
        
        $social = (object) [
            'instagram_embed' => "https://www.instagram.com/" . $confIg . "/?utm_source=ig_embed&utm_campaign=loading",
            'instagram_text'  => "Lihat Instagram Sakilah Catering",
            'tiktok_url'      => "https://www.tiktok.com/@" . $confTk,
            'tiktok_username' => $confTk,
            'tiktok_embed'    => "https://www.tiktok.com/@" . $confTk . "?refer=embed",
        ];

        return view('pages.about-us', [
            'about'       => $about,
            'finalImage'  => $finalImage,
            'maps_link'   => $maps_link,
            'social'      => $social
        ]);
    }
}