<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ZohoMailService
{
    private function getAccessToken(): string
    {
        // Cache access token for 55 mins (expires in 60)
        return Cache::remember('zoho_access_token', 3300, function () {
            $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
                'grant_type'    => 'refresh_token',
                'client_id'     => config('services.zoho.client_id'),
                'client_secret' => config('services.zoho.client_secret'),
                'refresh_token' => config('services.zoho.refresh_token'),
            ]);

            return $response->json()['access_token'];
        });
    }

    public function sendMail(array $data): bool
    {
        $accountId = env('ZOHO_ACCOUNT_ID'); // Your User ID from Zoho

        $response = Http::withToken($this->getAccessToken())
            ->post("https://mail.zoho.com/api/accounts/{$accountId}/messages", [
                'fromAddress' => env('MAIL_FROM_ADDRESS'),
                'toAddress'   => $data['to'],
                'subject'     => $data['subject'],
                'content'     => $data['body'],
                'mailFormat'  => 'html', // or 'plaintext'
            ]);

        return $response->successful();
    }
}