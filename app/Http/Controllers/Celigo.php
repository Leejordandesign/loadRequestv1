<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Celigo extends Controller
{
    //
    public static function getExport($url)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 80d2b5ef79094ee89c925128af5f3029',
        ])->post($url);

        $export = $response->json();
        return $export;
    }
}
