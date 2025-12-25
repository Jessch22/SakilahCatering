<?php

namespace App\Data;

class ContactData
{
    public static function get()
    {
        $rawPhone = config('sakilah.whatsapp'); 
        if (substr($rawPhone, 0, 1) == '0') {
            $waNumber = '62' . substr($rawPhone, 1);
        } else {
            $waNumber = $rawPhone;
        }
        $waLink = "https://wa.me/{$waNumber}";

        // 3. Return Array Data
        return [
            'address'        => config('sakilah.alamat'),
            'phone'          => $rawPhone,
            'wa_link'        => $waLink,
            'email'          => config('sakilah.email'),
            'map_link'       => config('sakilah.maps_link'),
            'contact_person' => 'Admin', 
        ];
    }
}