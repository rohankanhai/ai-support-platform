## AI Architecture (RAG-Ready)

This project follows a Retrieval-Augmented Generation (RAG) design.

Flow:
1. User submits a question via API
2. Relevant internal context is retrieved (VectorSearchService)
3. Context-aware prompt is generated (PromptBuilder)
4. LLM generates a grounded response
5. API returns controlled, hallucination-safe output

The vector store and LLM providers are abstracted to allow easy replacement
(e.g., OpenAI → AWS Bedrock) without impacting business logic.
