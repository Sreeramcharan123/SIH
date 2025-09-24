<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    // Show the chatbot view
    public function index()
    {
        return view('chatbot'); 
    }

    // Handle chatbot messages
    public function message(Request $request)
    {
        $userMessage = $request->message;

        // Call OpenAI API
        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful medical chatbot.'],
                    ['role' => 'user', 'content' => $userMessage],
                ],
            ]);

        $reply = $response->json('choices.0.message.content');

        return response()->json([
            'reply' => $reply ?? 'Sorry, I am unable to respond right now.'
        ]);
    }
}
