<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAnnouncement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'title' => 'Announcements',
            'announcements' => Announcement::orderBy('id', 'desc')
                                           ->paginate(10)
        ];
        
        return view('announcements.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements/create', ['title' => 'Create an Announcement']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAnnouncement $request)
    {
        $validated = $request->validated();

        $announcement = new Announcement;

        $announcement->name = $validated['name'];
        $announcement->description = $validated['description'];

        $announcement->save();

        return redirect('/announcement')->with('notif', $validated['name'] . ' was successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        $datas = [
            'title' => 'Announcement',
            'announcement' => [
                'id' => $announcement->id,
                'name' => $announcement->name,
                'descriptions' => explode("\r\n", $announcement->description)
            ]
        ];

        return view('announcements.show', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        $datas = [
            'title' => 'Edit an Announcement',
            'announcement' => [
                'id' => $announcement->id,
                'name' => $announcement->name,
                'description' => $announcement->description,
            ]
        ];
        
        return view('announcements.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAnnouncement $request, Announcement $announcement)
    {
        $validated = $request->validated();

        $announcement->name = $validated['name'];
        $announcement->description = $validated['description'];

        $announcement->save();

        return redirect('/announcement/' . $announcement->id)->with('notif', $validated['name'] . ' was successfully changed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        Announcement::destroy($announcement->id);

        return redirect('/announcement')->with('notif', $announcement->name . ' was successfully deleted.');
    }
    
    /* 
     * Provide search view
     *  */
    public function search(Request $request)
    {
        $datas = [
            'title' => 'Announcements',
            'announcements' => Announcement::where('name', 'like', "%{$request->keyword}%")
                             ->orderBy('id', 'desc')
                             ->paginate(10)
        ];
        
        return view('announcements.index', $datas);
    }
}
