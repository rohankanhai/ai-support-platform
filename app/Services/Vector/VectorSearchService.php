<?php

namespace App\Services\Vector;

class VectorSearchService
{
    public function search(string $query): string
    {
        // Mocked document context (RAG-ready)
        return "Laravel uses a service layer to separate business logic from controllers.
Services improve maintainability, testability, and scalability.";
    }
}
