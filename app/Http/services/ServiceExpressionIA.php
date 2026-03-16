<?php

namespace App\Http\services;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Http;

class ServiceExpressionIA
{

    public function getExpression(string $expression)
    {
        $apiKey = config("services.groq_api.api_key");

        try {
            $response = Http::timeout(15)->withHeaders([
                'Authorization' => "Bearer {$apiKey}",
                'Content-Type' => 'application/json',
            ])->post('https://api.groq.com/openai/v1/chat/completions', [
                'model' => 'llama-3.1-8b-instant',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Atue como uma calculadora rigorosa.
                    Resolva a expressão e retorne o resultado final e um passo a passo curto.
                    OBRIGATÓRIO: Formate toda a matemática da sua resposta (tanto o resultado quanto o passo a passo)
                    usando a sintaxe LaTeX, colocando todas as equações e números entre dois cifrões
                    (exemplo: $$\int x^2 dx = \frac{x^3}{3}$$).
                    Nunca justifique erros, se for insolúvel, retorne apenas "Não consigo calcular".'
                    ],
                    [
                        'role' => 'user',
                        'content' => "resolva esta expressão matematica: {$expression}"
                    ]
                ],
                'temperature' => 0,
            ]);
            $result = $response->json();


            return $result['choices'][0]['message']['content'] ?? 'Erro ao processar';
        } catch (\Exception $e) {
            return back()->with('result', 'Serviço temporariamente indisponível. Tente novamente em instantes.');
        }


    }
}
