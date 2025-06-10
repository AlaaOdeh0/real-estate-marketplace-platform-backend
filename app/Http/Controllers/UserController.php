<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string',
            'password' => 'required|string|min:6',
            'status'   => 'required|string',
            'email'    => 'required|email|unique:users',
            'role'     => 'required|in:admin,buyer,seller',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        return response()->json([
            'message' => 'User created successfully',
            'user'    => $user
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $validatedData = $request->validate([
            'name'     => 'sometimes|string',
            'password' => 'sometimes|string|min:6',
            'status'   => 'sometimes|string',
            'email'    => 'sometimes|email|unique:users,email,' . $id,
            'role'     => 'sometimes|in:admin,buyer,seller',
        ]);

        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($validatedData);

        return response()->json([
            'message' => 'User updated successfully',
            'user'    => $user
        ], 200);
    }
}
