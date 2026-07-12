<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index()
    {
        $cameras = Camera::orderBy('name')->get();

        return view('cameras.index', compact('cameras'));
    }

    public function create()
    {
        return view('cameras.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'stream_url' => 'nullable|url|max:1024',
            'description' => 'nullable|string|max:2000',
            'active' => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active');

        Camera::create($data);

        return redirect()->route('cameras.index')->with('success', 'Camera added successfully.');
    }

    public function show(Camera $camera)
    {
        return view('cameras.show', compact('camera'));
    }

    public function edit(Camera $camera)
    {
        return view('cameras.edit', compact('camera'));
    }

    public function update(Request $request, Camera $camera)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'stream_url' => 'nullable|url|max:1024',
            'description' => 'nullable|string|max:2000',
            'active' => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active');

        $camera->update($data);

        return redirect()->route('cameras.index')->with('success', 'Camera updated successfully.');
    }

    public function destroy(Camera $camera)
    {
        $camera->delete();

        return redirect()->route('cameras.index')->with('success', 'Camera removed successfully.');
    }
}
