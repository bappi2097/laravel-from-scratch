<?php

namespace App\Http\Controllers;

use App\Models\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $this->authorize('update', $reply->conversation);
        $reply->conversation->setBestReply($reply);
        return redirect()->back();
    }
}
