<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AI\OpenAIClient;
use App\Services\AI\PromptBuilder;
use App\Services\Vector\VectorSearchService;

class QueryController extends Controller
{
    public function ask(
        Request $request,
        OpenAIClient $ai,
        PromptBuilder $promptBuilder,
        VectorSearchService $vectorSearch
    ) {
        $question = $request->input('question');

        $context = $vectorSearch->search($question);
        $prompt  = $promptBuilder->build($context, $question);

        $answer = $ai->chat($prompt);

        return response()->json([
            'question' => $question,
            'answer'   => $answer,
        ]);
    }
}
