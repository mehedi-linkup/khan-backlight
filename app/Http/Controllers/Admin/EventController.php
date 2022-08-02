<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::latest()->get();
        return view('pages.admin.event', compact('event'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:events|max:100',
        ]);
        try {
            $event = new Event();
            $event->name = $request->name;
            $event->save();
            return Redirect()->back()->with('success', 'Insertion Successful!');
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', 'Insert Failed!');
        }
    }
    public function edit($id)
    {
        $eventData = Event::find($id);
        $event = Event::latest()->get();
        return view('pages.admin.event', compact('event', 'eventData'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);
        
        try {
            $event = Event::find($id);
            $event->name = $request->name;
            $event->save();
            return Redirect()->route('admin.event')->with('success', 'Update Successful!');

        } catch (\Exception $e) {
            // throw $e
            return Redirect()->back()->with('error', 'Update Failed!');
        }
    }
    public function destroy($id)
    {
        try {
            $event = Event::find($id);
            $event->delete();
            return Redirect()->back()->with('success', 'Deleted Successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return Redirect()->back()->with('error', 'Deleted Failed!');
        }
        
    }
}
