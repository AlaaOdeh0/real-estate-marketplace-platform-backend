<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return Notification::all();
    }

    public function userNotifications($receiver_id)
    {
        return Notification::where('receiver_id', $receiver_id)->get();
    }

    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return response()->json($notification, 201);
    }

    public function show($id)
    {
        return Notification::findOrFail($id);
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->is_read = true;
        $notification->status = 'read';
        $notification->save();

        return response()->json(['message' => 'Marked as read']);
    }


    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
