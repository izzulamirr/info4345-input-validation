<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request)
{
    $user = auth()->user();

    // Validate the input fields
    $validated = $request->validate([
        'nickname' => 'nullable|string|max:255',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed', // Password is optional
        'phone_no' => 'nullable|string|max:15',
        'city' => 'nullable|string|max:255',
    ]);

    // Handle avatar upload
    if ($request->hasFile('avatar')) {
        if ($user->avatar) {
            Storage::delete($user->avatar); // Delete the old avatar
        }
        $validated['avatar'] = $request->file('avatar')->store('avatars');
    }

    // Handle password update only if provided
    if ($request->filled('password')) {
        $validated['password'] = bcrypt($request->password);
    } else {
        unset($validated['password']); // Remove password from the update array if not provided
    }

    // Update the user's profile
    $user->update($validated);

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
}

public function destroy()
{
    $user = auth()->user();

    // Delete the user's avatar if it exists
    if ($user->avatar) {
        Storage::delete($user->avatar);
    }

    // Delete the user
    $user->delete();

    // Log the user out
    auth()->logout();

    // Redirect to the homepage with a success message
    return redirect('/')->with('success', 'Your account has been deleted successfully.');
}
}