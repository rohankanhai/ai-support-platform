<?php

namespace App\Services\AI;

use Illuminate\Support\Facades\Http;

class OpenAIClient
{
    public function chat(string $prompt): string
    {
        $response = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.2,
            ]);

        return $response->json('choices.0.message.content')
            ?? 'No response from AI';
    }
}
