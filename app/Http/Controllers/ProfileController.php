<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        $user = Auth::user();

        if ($user->role == 'admin') {
            return view('admin.profile.profile');
        } elseif ($user->role == 'provider') {
            return view('provider.profile.profile');
        } else {
            $reservations = Reservation::where('user_id', $user->id)->get();

            return view('profile.edit', [
                'user' => $user,
                'reservations' => $reservations,
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validate([
            // 'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['nullable', 'digits:10'],

        ]);

        $user = $request->user();

        // Handle image upload
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->getSchemeAndHttpHost() . '/uploads/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/uploads/'), $imagePath);
        } else {
            $imagePath = 'backend/assets/img/avatars/11.png';
        }

        // Update phone number
        $user->image = $imagePath;

        $user->phone = $request->phone;


        // Update other fields
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Your account is deleted successfully!');

        return Redirect::to('/');
    }
}
