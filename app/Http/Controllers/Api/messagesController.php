<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function index()
    {
        return response()->json(Message::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message_content' => 'required|string',
            'is_read' => 'nullable|boolean'
        ]);

        $message = Message::create($validated);

        return response()->json($message, 201);
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return response()->json($message, 200);
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|email',
            'message_content' => 'sometimes|required|string',
            'is_read' => 'sometimes|boolean'
        ]);

        $message->update($validated);

        return response()->json($message, 200);
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return response()->json(['message' => 'Message deleted'], 200);
    }
}
