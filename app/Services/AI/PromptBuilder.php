<?php

namespace App\Services\AI;

class PromptBuilder
{
    public function build(string $context, string $question): string
    {
        return <<<PROMPT
You are an internal company AI assistant.

RULES:
- Answer ONLY using the context provided below.
- If the answer is not found in the context, say: "I don't have enough information to answer that."
- Do NOT add external knowledge.
- Be concise and professional.

CONTEXT:
{$context}

QUESTION:
{$question}

ANSWER:
PROMPT;
    }
}
