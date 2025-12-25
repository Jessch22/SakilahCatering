<?php

namespace App\Http\Controllers;

use App\Data\ContactData;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactData::get();

        return view('pages.contact-us', [
            'contact' => $contact
        ]);
    }
}