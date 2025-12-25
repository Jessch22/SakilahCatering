<?php

namespace App\Http\Controllers;

use App\Data\MenuData;

class MenuController extends Controller
{
    public function index()
    {
        // Logic WA (sama seperti sebelumnya)
        $rawPhone = config('sakilah.whatsapp'); 
        if (substr($rawPhone, 0, 1) == '0') {
            $waNumber = '62' . substr($rawPhone, 1);
        } else {
            $waNumber = $rawPhone;
        }
        $waLink = "https://wa.me/{$waNumber}";

        return view('pages.menu', [
            'buffetPackages' => MenuData::getBuffetPackages(),
            'gubuganList'    => MenuData::getGubuganFavorites(),
            'waLink'         => $waLink
        ]);
    }
}