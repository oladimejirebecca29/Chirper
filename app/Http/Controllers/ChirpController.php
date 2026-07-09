<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{

    public function index(): View
    {
        return view('home', [
            'chirps' => Chirp::with('user')->latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ], [
            'message.required' => 'Please write something to chirp!',
            'message.max' => 'Chirps must be 255 characters or less.',
        ]);

        Chirp::create([
            'message' => $validated['message'],
            'user_id' => auth()->id(),
        ]);

        return redirect('/')->with('success', 'Your chirp has been posted!');
    }
    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', compact('chirp'));
    }
    public function update(Request $request, Chirp $chirp)
    {
        $this->authorize('update', $chirp);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', 'Chirp updated!');
        }
        
    public function destroy(Chirp $chirp)
    {
        $this->authorize('delete', $chirp);

        $chirp->delete();

        return redirect('/')->with('success', 'Chirp deleted!');
    }
}