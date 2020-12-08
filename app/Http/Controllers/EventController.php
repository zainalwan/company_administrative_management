<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'title' => 'Events',
            'events' => Event::paginate(10),
        ];
        
        return view('events.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events/create', ['title' => 'Create an Event']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateEvent $request)
    {
        $validated = $request->validated();

        $event = new Event;

        $event->name = $validated['name'];
        $event->date = $validated['date'];
        $event->description = $validated['description'];

        $event->save();

        return redirect('/events')->with('notif', $validated['name'] . ' was successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $datas = [
            'title' => 'Event',
            'event' => [
                'id' => $event->id,
                'name' => $event->name,
                'date' => $event->date,
                'description' => $event->description
            ]
        ];

        return view('events.show', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $datas = [
            'title' => 'Edit an Event',
            'event' => [
                'id' => $event->id,
                'name' => $event->name,
                'date' => $event->date,
                'description' => $event->description,
            ]
        ];
        
        return view('events.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateEvent $request, Event $event)
    {
        $validated = $request->validated();

        $event->name = $validated['name'];
        $event->date = $validated['date'];
        $event->description = $validated['description'];

        $event->save();

        return redirect('/events/' . $event->id)->with('notif', $validated['name'] . ' was successfully saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);

        return redirect('/events')->with('notif', $event->name . ' was successfully deleted.');
    }
}
