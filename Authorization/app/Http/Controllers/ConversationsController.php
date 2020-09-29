<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    public function index()
    {
        return view('conversations.index', [
            'conversations' => Conversation::all()
        ]);
    }
    public function show(Conversation $conversation)
    {
        return view('conversations.show', [
            'conversation' => $conversation
        ]);
    }
}
