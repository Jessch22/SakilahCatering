<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\EventsData;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua data 
        $dataEvents = EventsData::getAll();

        // 2. Konversi Array biasa menjadi Collection Laravel
        $collection = new Collection($dataEvents);

        // 3. Konfigurasi Pagination
        $perPage = 9;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        
        // 4. Potong data sesuai halaman
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // 5. Buat Object Paginator
        $paginatedEvents = new LengthAwarePaginator(
            $currentPageItems, 
            count($collection), // Total semua data
            $perPage, // Item per halaman
            $currentPage, // Halaman saat ini
            ['path' => $request->url(), 'query' => $request->query()] // Agar link halaman (page=2) berfungsi
        );

        // 6. Kirim ke View
        return view('pages.event', [
            'events' => $paginatedEvents
        ]);
    }
}