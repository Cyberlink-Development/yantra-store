<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZohoMailController extends Controller
{
    // Step 1: Redirect to Zoho OAuth
    public function redirect()
    {
        $query = http_build_query([
            'response_type' => 'code',
            'client_id'     => env('ZOHO_CLIENT_ID'),
            'scope'         => 'ZohoMail.messages.CREATE',
            'redirect_uri'  => env('ZOHO_REDIRECT_URI'),
            'access_type'   => 'offline', // gets refresh token
        ]);

        return redirect('https://accounts.zoho.com/oauth/v2/auth?' . $query);
    }

    // Step 2: Handle callback & store refresh token
    public function callback(Request $request)
    {
        $response = Http::post('https://accounts.zoho.com/oauth/v2/token', [
            'grant_type'    => 'authorization_code',
            'client_id'     => env('ZOHO_CLIENT_ID'),
            'client_secret' => env('ZOHO_CLIENT_SECRET'),
            'redirect_uri'  => env('ZOHO_REDIRECT_URI'),
            'code'          => $request->code,
        ]);

        $data = $response->json();

        // Save refresh token to .env or database
        // For now, dump it and manually add to .env
        dd($data['refresh_token'], $data);
    }
}
